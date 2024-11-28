<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        // Asumsi kolom 'role' menentukan apakah user adalah admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Redirect jika bukan admin
        return redirect('/')->with('error', 'Access Denied. Admins only.');
    }
}
