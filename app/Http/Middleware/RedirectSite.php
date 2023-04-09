<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectSite
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
        if (env('APP_ENV') == 'local') {
            return $next($request);
        }

        if (env("CURRENCY") == 'INR') {
            if ($request->hasCookie('country_code')) {
                $countryCode = request()->cookie('country_code');
                if ($countryCode != 'IN') {
                    $url = self::getRedirectUrl(env('USD_SITE'));
                    return redirect()->to($url);
                }
            } else {
                $ip = \Request::getClientIp(true);
                // $ip = '49.34.187.189';
                $countryCode = self::getCountryByIp($ip);

                if ($countryCode != 'IN') {
                    $url = self::getRedirectUrl(env('USD_SITE'));
                    return redirect()->to($url);
                }

                $response = $next($request);
                return $response->withCookie(cookie("country_code", $countryCode, 1440));
            }
        }

        if (env("CURRENCY") == 'USD') {
            if ($request->hasCookie('country_code')) {
                $countryCode = request()->cookie('country_code');
                if ($countryCode == 'IN') {
                    $url = self::getRedirectUrl(env('INR_SITE'));
                    return redirect()->to($url);
                }
            } else {
                $ip = \Request::getClientIp(true);
                // $ip = '49.34.187.189';
                $countryCode = self::getCountryByIp($ip);

                if ($countryCode == 'IN') {
                    $url = self::getRedirectUrl(env('INR_SITE'));
                    return redirect()->to($url);
                }

                $response = $next($request);
                return $response->withCookie(cookie("country_code", $countryCode, 1440));
            }
        }

        return $next($request);
    }

    public static function getCountryByIp($ip) {
        $response = \Http::get('http://ip-api.com/json/'.$ip, [
        ]);

        if (!empty($response->json())) {
            $data = $response->json();
            if (isset($data['status']) && $data['status'] == 'success') {
                return $data['countryCode'];
            }
        }

        return false;
    }

    public static function getRedirectUrl($domain)
    {
        $url = '';
        $path = request()->path();
        if (substr($path, 0, 1) == '/') {
            $url = $domain.$path;
        } else {
            $url = $domain.'/'.$path;
        }

        return $url;
    }

}
