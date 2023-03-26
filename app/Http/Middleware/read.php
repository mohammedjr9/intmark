<?php

namespace App\Http\Middleware;

use App\Models\ContactUs;
use Closure;
use Illuminate\Http\Request;

class read
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
     $d= ContactUs::where('read',0)->update([
           'read'=>1
        ]);
        return $next($request);
    }
}
