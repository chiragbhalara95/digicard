<?php

namespace App\Http\Controllers\BussinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth, DB, File;
use App\Models\PaymentModel;

class PaymentController extends Controller
{
    public function index()
    {
        $page_title = "Payment Master - Digicard";
        $userId     = Auth::user()->id;
        $paymentMasterData = PaymentModel::where('user_id', $userId)->orderby('id', 'desc')->get();
 
        return view('user.user-bussiness.payment-master.list',compact('page_title', 'paymentMasterData'));
    }

    public function addPaymentMaster()
    {
        $page_title = "Add Payment Master";

        return view('user.user-bussiness.payment-master.create', compact('page_title'));
    }

    public function savePaymentMaster(Request $request)
    {
        $params = $request->all();
        $id     = isset($params['id']) ? $params['id'] : null;
        if($request->file('qr_img')!='') {
            $file     = $request->file('qr_img');
            $filename = $file->getClientOriginalName();
            $imgname  = uniqid().$filename;
  
            $params['qr_img'] = $imgname;       
            $destinationPath  = public_path('upload/payment/');       
            $request->file('qr_img')->move($destinationPath, $imgname);  
        }

        $params['user_id'] = Auth::user()->id;
        $paymentObj = PaymentModel::find($id);
        if (empty($paymentObj)) {
            $paymentObj = new PaymentModel();
        }
        $paymentObj->fill($params);
        $paymentObj->save();

        return redirect(route('business.payment-master-list'))->with("success", 'Payment master has been sucessfully saved.'); 
    }

    public function editPaymentMaster($id)
    {
        $page_title = "Edit Payment Master";
        $paymentMasterData = PaymentModel::find($id);

        return view('user.user-bussiness.payment-master.edit', compact('page_title', 'paymentMasterData'));
    }

    public function deletePaymentMaster($id)
    {
        $paymentMasterData = PaymentModel::find($id);
        if (empty($paymentMasterData)) {
            if (!empty($paymentMasterData->qr_img)) {
                $fullpath = public_path('upload/payment/').$paymentMasterData->qr_img;
                File::delete($fullpath);    
            }
  
            return redirect(route('business.payment-master-list'))->with("error", "Invalid request!!"); 
        }

        PaymentModel::where('id', $id)->delete();

        return redirect(route('business.payment-master-list'))->with("success", "Payment master has been deleted Successfully!!"); 
    }

}
