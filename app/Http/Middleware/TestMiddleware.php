<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('lang')) {
            App::setLocale(session()->get('lang'));
        }
        else{
            session()->put('lang','en');
        }
        return $next($request);
    }



//    public function handle(Request $request, Closure $next): Response
//    {
//
////        dd('salom');
////        session()->put('ism', 'Muhammadaziz');
////        session()->get('ism', 'Muhammadaziz');
////        session()->flush('ism', 'Muhammadaziz');
////        session()->put('ism', 'Muhammadaziz');
////        session()->put('ism', 'Muhammadaziz');
////        if (session()->has('ism')){
////            session()->put('ism', 'Muhammadaziz');
////        }
////        else {
////            session()->put('ism', 'bunaqa session yoq');
////        }
//        return $next($request);
//    }
}
