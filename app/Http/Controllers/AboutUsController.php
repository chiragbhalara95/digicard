<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AboutUsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        $countryData = file_get_contents(url('public/country-tel-code.json'));
        $countryData = json_decode($countryData, true);

        return view('user/edit-about', compact('countryData'));
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutView()
    {
        $countryData = file_get_contents(url('public/country-tel-code.json'));
        $countryData = json_decode($countryData, true);

        return view('user/edit-about', compact('countryData'));
    }

    public function profile()
    {
        $userId = auth()->user()->id;
        $userInfo = User::find($userId); 

        return view('user/profile', compact('userInfo'));
    }

    public function storeProfile(Request $request)
    {
        $params = $request->all();
        $userId = auth()->user()->id;
        $userInfo = User::find($userId); 
        if (isset($params['want_chang_pwd'])) {
            if(empty($params['current_password'])) {
                return back()->with('error',"Please enter current password.")->withInput();
            }

            if(empty($params['password']) || empty($params['password_confirmation'])) {
                return back()->with('error',"Please enter new password and confirm password.")->withInput();
            }
            if($params['password'] !== $params['password_confirmation']) {
                return back()->with('error',"new password and confirm password didn't match.")->withInput();
            }

            if(Hash::check($params['current_password'], $userInfo->password)):
                $userInfo->password = Hash::make($params['password']);
            else:
                return back()->with('error',"Current password didn't match.");
            endif;    
        }


        $userInfo->name = $params['name'];
        $userInfo->save();

        return redirect("profile")->with("success", "Profile updated successfully.");
    }

}
