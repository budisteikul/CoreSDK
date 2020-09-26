<?php

namespace budisteikul\coresdk\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use budisteikul\outletsdk\Models\Outlets as Outlets;
use Session;
use URL;
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

        //print(\Request::url());
        
        if(Route::has('route_outletsdk_outlets.index'))
        {
            $outlet_url = str_ireplace($request->getSchemeAndHttpHost()."/","",route('route_outletsdk_outlets.index')) ."*";
            if(!\Request::is($outlet_url))
            {
                Session::put('previous_url',URL::full());
                if(!Session::has('outlet_id'))
                {
                    return redirect(route('route_outletsdk_outlets.index') .'/selector');
                }
                else
                {
                    $outlets = Outlets::where('status',1)->find(Session::get('outlet_id'));
                    if(!@count($outlets)) return redirect(route('route_outletsdk_outlets.index') .'/selector');
                }
            }
        }
        
        return $next($request);
    }
}
