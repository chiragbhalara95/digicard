<?php

namespace App\Http\Controllers\BussinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisitorLog;
use Auth;

class VisitorLogController extends Controller
{

    public function getList(Request $request)
    {
        $page_title = "Visitor Logs - Digicard";
        $slug = Auth::user()->slug;
        $data['product_data'] = VisitorLog::where('slug', $slug)->orderby('id', 'desc')->get();

        return view('user.user-bussiness.visitor-logs',compact('page_title'), $data);
    }

}
