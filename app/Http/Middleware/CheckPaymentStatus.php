<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

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
        if (!empty($userObj) && $userObj->profile_config === '1') {
            return redirect('payment')->with('error',"Please configure your account.");
        }

        return $next($request);
    }
}
