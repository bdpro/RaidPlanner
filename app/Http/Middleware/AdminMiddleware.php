<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth; 
use Closure;

class AdminMiddleware
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
       //        dd(Auth::user()->role);
        if(Auth::user()->role == '1') // is an admin
        {
            return $next($request); // pass the admin
        }     
        
        
  
         return redirect('/'); // not admin. redirect whereever you like
   }
}
