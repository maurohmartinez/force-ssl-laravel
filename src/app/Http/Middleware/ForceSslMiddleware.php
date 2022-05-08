<?php

namespace MHMartinez\ForceSsl\app\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class ForceSslMiddleware
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (!$request->secure() && Config::get('force_ssl.enabled')) {
            return Redirect::secure($request->getRequestUri());
        }

        return $next($request);
    }
}
