<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialLinkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function socialLinkListView()
    {
        if(!empty(auth()->user()) && auth()->user()->is_admin === 1){
            return redirect('/admin/home')->with('error',"You don't have admin access.");
        }

        return view('user/social-list');
    }

}
