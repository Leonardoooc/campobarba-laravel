<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (session('autenticado') != 'SIM') {
            return redirect()->route('login')->with('error', 'Acesso não autorizado.');
        }

        return $next($request);
    }
}