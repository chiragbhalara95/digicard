<?php

namespace App\Http\Controllers\BussinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnquiryModel;
use Auth;

class EnquiryController extends Controller
{
    public function enquiryList(Request $request)
    {
        $page_title = "Enquiry - Digicard";
        
        $user_id = Auth::user()->id;
        
        $data['product_data'] = EnquiryModel::where('user_id', $user_id)->orderby('id', 'desc')->get();

        return view('user.user-bussiness.enquiry',compact('page_title'), $data);
    }

}
