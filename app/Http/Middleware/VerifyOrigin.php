<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyOrigin
{
    public function handle(Request $request, Closure $next)
    {
        //check whether request comes from apple web store

        return $next($request);
    }
}
