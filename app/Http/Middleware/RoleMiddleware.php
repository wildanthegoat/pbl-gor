<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next):
        Response
    {
        if(Auth::user()->role !== 'admin') {
            // abort(403, 'Unauthorized action.');
            return redirect('/');
        }

        return $next($request);
    }
}

