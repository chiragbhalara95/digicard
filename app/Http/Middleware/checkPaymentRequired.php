<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkPaymentRequired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userObj = auth()->user();
        $expDate = date("Y-m-d", strtotime("+3 day"));

        if (!empty($userObj->package_start_date) && !empty($userObj->package_end_date) && $userObj->package_end_date > $expDate) {
            return redirect('/home')->with('error',"You are already subscribed");
        }

        return $next($request);
    }
}
