<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            // Chưa đăng nhập thì redirect về login
            return redirect('/admin/login');
        }

        if (!Auth::user()->is_admin) {
            // Đã đăng nhập nhưng không phải admin thì hiện thông báo
            abort(403, 'Bạn không phải admin.');
        }

        return $next($request);
    }
}
