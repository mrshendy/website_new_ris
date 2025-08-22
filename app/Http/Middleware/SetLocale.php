<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // تحقق من وجود اللغة في الجلسة (Session)
        if (Session::has('locale')) {
            // قم بتعيين لغة التطبيق بناءً على القيمة الموجودة في الجلسة
            App::setLocale(Session::get('locale'));
        }

        // استكمل الطلب
        return $next($request);
    }
}