<?php

namespace DivineOmega\SeoMiddleware\Http\Middleware;

use Closure;

class HttpsOnly
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
        if (!$request->secure() && env('APP_ENV')==='prod') {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
