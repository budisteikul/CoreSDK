<?php

namespace budisteikul\coresdk\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Auth;

class CoreMiddleware
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

        if(empty(Auth::user()->email_verified_at))
        {
            return redirect(route('verification.notice'));
        }
        
        return $next($request);
    }
}
