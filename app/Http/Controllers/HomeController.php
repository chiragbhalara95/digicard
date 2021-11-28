<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends BasicController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!empty(auth()->user()) && auth()->user()->is_admin === 1){
            return redirect('/admin/home')->with('error',"You don't have admin access.");
        }

        $userObj = User::find(auth()->user()->id);
        if(!empty($userObj) && empty($userObj->theme)) {
             return redirect('user/occasion')->with('error', "Please configure account.");
        }

        $postReq = [
            'template_name' => \App\Helpers\CustomHelper::getUserTemplateName(),
            'keyword' => '',
            'page_title' => '',
            'page_description' => '',
        ];

        //echo "<pre>";print_r(\APp\Models\User::find(12)->product()->first()->product_name);exit;
        return view('home', $postReq);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

}
