<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BusinessAccess
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

        if (auth()->user()->isBusiness()) {
            return $next($request);
        } else {
            // return redirect()->route('404');
            echo "Only business can access this page";
            exit;
        }
    }
}
