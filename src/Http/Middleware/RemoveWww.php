<?php

namespace DivineOmega\SeoMiddleware\Http\Middleware;

use Closure;

class RemoveWww
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
        $www = 'www.';

        $url = $request->url();

        if (strpos($url, $www) !== false) {
          $url = str_replace($www, '', $url);
          return redirect($url);
        }

        return $next($request);
    }
}
