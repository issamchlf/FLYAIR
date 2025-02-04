<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        $user =  Auth::user();
        
        if ($role === 'admin' && (!$user || !$user->isAdmin)) {
            return redirect('/')->with('error', 'You can`t enter to this page.');
        }

        if ($role === 'user' && !$user) {
            return redirect('/login')->with('error', 'Login in to your account.');
        }

        return $next($request);
    }
}