<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         if (!session()->has('id') || !session()->has('name')) {
        return redirect('/Adminlogin')->with('error', 'You must be logged in to access the admin panel.');
    }

    $user = \App\Models\User::find(session()->get('id'));
    if (!$user || $user->type !== 'admin') {
        return redirect('/Adminlogin')->with('error', 'You must be an admin to access the admin panel.');
    }

        return $next($request);
    }
}
