<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Str;
use App\Models\UserVerify;

class CheckPaymentStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (empty(auth()->user())) {
            return $next($request);
        }

        if(!empty(auth()->user()) && auth()->user()->is_admin === 1){
            return $next($request);
        }

        $userId = auth()->user()->id;
        $userObj = User::find($userId);

        if(empty($userObj->email_verified_at)) {
            $token = Str::random(64);
            UserVerify::create([
                'user_id' => $userId, 
                'token'   => $token
            ]);

            // email data
            $email_data = array(
                'name'  => $userObj->name,
                'email' => $userObj->email,
            );

            $url = url('account/verify')."/".$token;
            \Mail::send('email.emailVerificationEmail',['url' => $url, 'user' => $email_data], function ($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['name'])
                ->subject('Verify Email Address')
                ->from(env('MAIL_USERNAME'), 'Digicard');
            });


            auth()->logout();
            return redirect('login')->with('error',"Please active your account, check email for activation account.");
        }

        if (!empty($userObj) && $userObj->profile_config === '1') {
            return redirect('payment')->with('error',"Please configure your account.");
        }

        $expDate = date("Y-m-d");
        if ($request->path() == 'home') {
            $expDate = date("Y-m-d", strtotime("+3 day"));
        }

        if (empty($userObj->package_start_date) || empty($userObj->package_end_date) || $userObj->package_end_date < $expDate) {
            return redirect('/payment')->with('error',"Please do payment.");

        }

        return $next($request);
    }
}
