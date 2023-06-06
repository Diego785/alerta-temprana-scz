<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        // if (!Auth::check() || !Auth::user()->hasRole($roles)) {
        //     abort(403, 'Acceso denegado.');
        // }

        return $next($request);
    }
}

