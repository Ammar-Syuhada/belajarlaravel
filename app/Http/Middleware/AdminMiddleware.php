<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // tambahkan ini adminmiddleware
        if (!Auth::guard('admin')->check()) {
            return redirect('/');
        }
        // selanjutnya tambahkan adminmiddleware di bootstrap/app.php supaya dikenali laravel
        return $next($request);
    }
}
