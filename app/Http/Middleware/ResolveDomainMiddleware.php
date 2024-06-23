<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\FrontWebsiteController;

class ResolveDomainMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $domain = $request->getHost();
        $mapping = User::where('domain', $domain)->first();
        if (!empty($mapping)) {
            $obj = (new FrontWebsiteController())->userVisitCard($request, $mapping->slug);
            echo $obj;exit;
        }

        return $next($request);
    }
}
