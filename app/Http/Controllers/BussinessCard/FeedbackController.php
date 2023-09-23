<?php

namespace App\Http\Controllers\BussinessCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\RatingModel;

class FeedbackController extends Controller
{
    public function getList(Request $request)
    {
        $page_title = "Feeback List - Digicard";
        $userId = Auth::user()->id;
        $data['product_data'] = RatingModel::where('user_id', $userId)->orderby('id', 'desc')->get();

        return view('user.user-bussiness.feedback.list',compact('page_title'), $data);
    }

}
