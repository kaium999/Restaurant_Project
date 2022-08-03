<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class AlreadyLogIn
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
         $path= $request->path();
         echo Session::has('logid');
        if(Session::has('logid')&&($path=="login"||$path=="registration") ){
            //return view('/');
            //return redirect('Home');
            return back();
        }
        /*if(Session::has('logid')&&(url('login')==$request->url())||(url('registration')==
        $request->url())){
            return back();
        }*/
        return $next($request);
    }
}
