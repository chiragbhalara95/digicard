<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;
use App\Models\User;

class RazorpayPaymentController extends BasicController
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {        
        return view('user.razorpayView');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));
                \Log::info("[PAYMENT] response: ", $response->toArray());

                User::initUserPayment(auth()->user()->id);

                return $this->responseSuccess([], "Your payment has been successful.");
            } catch (Exception $e) {
                Session::put('error',$e->getMessage());
                return $this->responseError($e->getMessage());
            }
        }

        Session::put('success', 'Payment successful');
        return $this->responseError($e->getMessage());
    }
}
