<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $privilege)
    {
        
        if($privilege == 'Administrator' && auth()->user()->role == 'Administrator'){
            return $next($request);
        }else if($privilege == 'Mitra' && auth()->user()->role == 'Pengunjung'){       
            return $next($request);
        }else if($privilege == "Administrator&Pengunjung"){
            if(auth()->user()->role == 'Administrator'){
                  return $next($request);
             }else if(auth()->user()->role == 'Pengunjung'){
                  return $next($request);
             }
        }
          
        return back();
    }
}