<?php

namespace App\Http\Controllers\BussinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuoteOrderModel;
use Auth, DB, File;
use App\Http\Controllers\BasicController;
use App\Models\UserOrderModel;
use App\Models\UserOrderItemModel;
use PDF;
use App\Models\CompanyInfoModel;

class OrderController extends BasicController
{
    public function index(){
        $page_title = "Quote Order - Digicard";
        $userId     = Auth::user()->id;
        $orderData  = QuoteOrderModel::where('user_id', $userId)->orderby('id', 'desc')->get();

        return view('user.user-bussiness.orders.lead-orders',compact('page_title', 'orderData'));
    }

    public function convertOrder(Request $request){
        $params = $request->all();
        $userId = auth()->user()->id;
        $quoteId = $params['id'];
        $quoteOrderData  = QuoteOrderModel::where('user_id', $userId)->where('id', $quoteId)->first();
        if (empty($quoteOrderData)) {
            return $this->responseError('Invalid Request');
        }

        $orderData = [
            'first_name' => $quoteOrderData->first_name,
            'last_name'  => $quoteOrderData->last_name,
            'user_id'    => $quoteOrderData->user_id,
            'quote_id'   => $quoteOrderData->id,
            'email'      => $quoteOrderData->email,
            'contactNo'  => $quoteOrderData->contactNo,
            'address'    => $quoteOrderData->address,
            'city'       => $quoteOrderData->city,
            'state'      => $quoteOrderData->state,
            'zipCode'    => $quoteOrderData->zipCode,
            'total'      => 0
        ];
        $orderId = UserOrderModel::insertGetId($orderData);

        if(!empty($quoteOrderData->array_product))
        {
            $quoteOrderData->array_product = json_decode($quoteOrderData->array_product, true);
            $productIds = [];
            foreach ($quoteOrderData->array_product as $detail) {
                $productIds[] = $detail['id'];
            }

            if (!empty($productIds)) {
                $productData = DB::table('gallery')->where('user_id', $userId)->whereIn('id', $productIds)->orderby('id', 'asc')->get();
                $productData = array_column($productData->toArray(), 'title', 'id');
            }

            $orderTotal = 0;
            foreach ($quoteOrderData->array_product as $detail) {
                $subTotal = $detail['quantity'] * $detail['price'];
                $taxRate  = 6;
                $tax1 = round($subTotal*$taxRate/100, 2);
                $tax2 = round($subTotal*$taxRate/100, 2);
                $total = $subTotal + $tax1 + $tax2;
                $orderTotal += $total;

                $orderItemsData = [
                    'product_name' => isset($productData[$detail['id']]) ? $productData[$detail['id']] : null,
                    'qty'          => $detail['quantity'],
                    'price'        => $detail['price'],
                    'sub_total'    => $subTotal,
                    'tax_amount1'  => $tax1,
                    'tax_amount2'  => $tax2,
                    'total'        => $total,
                ];
                UserOrderItemModel::create($orderItemsData);
            }
        }

        UserOrderModel::where('id', $orderId)->update(['total' => $orderTotal]);
        QuoteOrderModel::where('user_id', $userId)->where('id', $quoteId)->update(['order_id' => $orderId]);

        return $this->responseSuccess([], 'Place Order successfully');
    }

    public function orderList() {
        $page_title = "Order List - Digicard";
        $userId     = Auth::user()->id;
        $orderData  = UserOrderModel::where('user_id', $userId)->orderby('id', 'desc')->get();

        return view('user.user-bussiness.orders.orders-list',compact('page_title', 'orderData'));
    }

    public function doInvoiceSave(Request $request, $orderId)
    {
        $params = $request->all();
        $userId = auth()->user()->id;
        $orderData  = UserOrderModel::where('user_id', $userId)->where('id', $orderId)->first();
        if (empty($orderData)) {
            return redirect(route('business.order-list'))->with('error',"Invalid Request");
        }

        $companyInfoData = CompanyInfoModel::where('user_id', $userId)->first();
        $totalTax1 = $totalTax2 = 0;
        $orderItemData = UserOrderItemModel::where('id', $orderId)->get();
        foreach($orderItemData as $orderItemDetail){
            $totalTax1 += $orderItemDetail->tax_amount1;
            $totalTax2 += $orderItemDetail->tax_amount2;
        }

        $orderData->total_tax1 = $totalTax1;
        $orderData->total_tax2 = $totalTax2;

        $pdf = PDF::loadView('user.user-bussiness.orders.invoice_pdf', compact('orderData', 'orderItemData', 'companyInfoData'));

        if (isset($params['print']) && $params['print'] == 'y') {
            return $pdf->stream();
        }

        return $pdf->download('invoice-'.$orderData->id.'.pdf');
    }

}
