<?php

namespace App\Http\Controllers\BussinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth, DB;
use App\Models\PaymentModel;

class PaymentController extends Controller
{
    public function index()
    {
        $page_title = "Product - Digicard";
        $userId     = Auth::user()->id;
        $paymentMasterData = PaymentModel::where('user_id', $userId)->orderby('id', 'asc')->get();
 
        return view('user.user-bussiness.payment-master.list',compact('page_title', 'paymentMasterData'));
    }

    public function deletePaymentMaster($id)
    {
        $paymentMasterData = PaymentModel::find($id);
        if (empty($paymentMasterData)) {
            return redirect(route('business.payment-master-list'))->with("error", "Invalid request!!"); 
        }

        PaymentModel::where('id', $id)->delete();

        return redirect(route('business.payment-master-list'))->with("success", "Payment master has been deleted Successfully!!"); 
    }

}
