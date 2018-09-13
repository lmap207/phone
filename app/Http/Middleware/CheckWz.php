<?php

namespace App\Http\Middleware;

use App\Setting;
use Closure;

class CheckWz
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
        $setting=Setting::get()->first();
        if(!$setting->sopen==0){
            return $next($request);
        }else{
            return redirect('/weihu');
        }
        
    }
}
