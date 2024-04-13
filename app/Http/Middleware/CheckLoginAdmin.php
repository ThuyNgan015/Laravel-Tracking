<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoginAdmin
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
       if(!$this->isLogin()){
        return redirect(route('home'));
       }
    //    if($request->is('admin/*' || $request->is('admin'))){
    //     echo "<h1>Heloo</h1>";
    //    }
        return $next($request);
    }
    public function isLogin(){
        return true;
    }

}