<?php

namespace App\Http\Middleware;

use App\Http\Controllers\CheckoutController;
use Closure;
use Illuminate\Http\Request;

use Session;

class FrontEndWithoutLoginCheck
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
//        if(Session::get('id')){
//            return $next($request);
//        }else{
//            return redirect('/front-end/login');
//        }
    }
}
