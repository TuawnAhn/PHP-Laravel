<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
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
        //Nếu không đăng nhập và không phải là admin thì k được phép truy cập
        if (!Auth::check() || !Auth::user()->isRoleAdmin()) {
            return redirect()->route('login')->withErrors('Bạn đéo đủ trình để truy cập vào admin');
        }
        return $next($request);
    }
}
