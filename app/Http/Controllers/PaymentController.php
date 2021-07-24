<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;
  
class PaymentController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $postReq = [
            'template_name' => \App\Helpers\CustomHelper::getUserTemplateName(),
            'keyword' => '',
            'page_title' => '',
            'page_description' => '',
        ];

        return view('user.payment', $postReq);
    }

}
