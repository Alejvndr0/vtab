<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!auth()->check() || auth()->user()->role !== $role) {
            return redirect('/home')->with('error', 'No tienes permiso para acceder.');
        }
        return $next($request);
    }
}
