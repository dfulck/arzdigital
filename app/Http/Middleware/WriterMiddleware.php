<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WriterMiddleware
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
        if (auth()->user()->Role_id!=1){
            if (auth()->user()->Role_id!=3){
                abort(403);
            }
        }

        return $next($request);
    }
}
