<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Razorpay\Api\Api;
use Session;
use Exception;
use App\Models\SkuPackageModel;
use App\Helpers\CustomHelper;
use App\Models\User;

class PayPalController extends BasicController
{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $productId = auth()->user()->product_id;
        $packageData = SkuPackageModel::select([
            'price',
            'special_price',
            'price_usd',
            'special_price_usd',
            'description',
            'product_name',
            'package_type_name',
            'duration',
            'durationType',
            'product.product_id',
            'package_type.package_type_id',
            'package_duration.package_duration_id',
            'sku_package.sku_package_id'
        ])
        ->join('product', 'product.product_id', '=', 'sku_package.product_id')
        ->join('package_type', 'package_type.package_type_id', '=', 'sku_package.package_type_id')
        ->join('package_duration', 'package_duration.package_duration_id', '=', 'sku_package.package_duration_id')
        ->where('sku_package.product_id', $productId)
        ->get();

        $skuCustomPackage = [];
        if(!empty($packageData)) {
            foreach ($packageData as $packageDetail) {
                $skuCustomPackage[$packageDetail->product_id][$packageDetail->package_type_id][] = $packageDetail->toArray();
            }
        }

        // $userData        = CustomHelper::getUserDataByIp();
        // $userCountryCode = 'IN';//!empty($userData->geoplugin_countryCode) ? $userData->geoplugin_countryCode :'IN';
        // $userCurrency    = ($userCountryCode !== 'IN') ? 'USD' : 'INR';
        $userCurrency = 'INR';
        if (!empty(env('CURRENCY'))) {
            $userCurrency = env('CURRENCY');
        }

        $formatePackage = [];
        if(!empty($skuCustomPackage)) {
            foreach ($skuCustomPackage as $productId => $skuCustomPackageDetail) {
                foreach ($skuCustomPackageDetail as $detail) {
                   $uniqueDetail = $detail[0];
                    $durationArr = [];
                    $detail[0]['currency'] = $userCurrency;
                    foreach ($detail as $value) {
                        if ($userCurrency == 'USD') {
                                $durationArr[$value['sku_package_id']] = $value['duration'].' '.$value['durationType'].' ($'.number_format($value['price_usd'], 2).')';
                        } else {
                                $durationArr[$value['sku_package_id']] = $value['duration'].' '.$value['durationType'].' (₹'.number_format($value['price'], 2).')';
                        }
                    }
                   $detail[0]['duration'] = $durationArr;
                   $formatePackage[$productId][] = $detail[0];
                }
            }
        }

        $skuCustomPackage = $formatePackage;

        $postReq = [
            'template_name' => \App\Helpers\CustomHelper::getUserTemplateName(),
            'keyword' => '',
            'page_title' => '',
            'page_description' => '',
            'skuCustomPackage'=> $skuCustomPackage,
            'userCurrency' => $userCurrency,
        ];

        return view('user.paypalView', $postReq);
    }

    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function processTransaction(Request $request)
    {
        $params = $request->all();
        $skuId = $params['sku_price'] ? $params['sku_price'] : null;
        if (empty($skuId)) {
            return $this->responseError('Invalid request, Please try again');
        }

        $skuData = SkuPackageModel::where('sku_package_id', $skuId)->first();
        if (empty($skuData)) {
            return $this->responseError('Invalid request, Please try again');
        }

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('successTransaction'),
                "cancel_url" => route('cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $skuData->price_usd
                    ]
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return $this->responseSuccess(['redirect_url'=>$links['href']], "Your payment has been successful.");
                }
            }

            return $this->responseError('Something went wrong.');

        } else {
            return $this->responseError('Something went wrong.');
        }
    }
    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        \Log::info("[PAYMENT] response: ", $response->toArray());

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            User::initUserPayment(auth()->user()->id);

            Session::put('success', 'You have canceled the transaction.');

            return redirect()
                ->route('createTransaction')
                ->with('success', 'Transaction complete.');
        } else {
            Session::put('error', 'You have canceled the transaction.');

            return redirect()
                ->route('createTransaction')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }
    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        Session::put('error', 'You have canceled the transaction.');

        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}
