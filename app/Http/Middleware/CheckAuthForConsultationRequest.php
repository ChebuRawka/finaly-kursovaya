<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuthForConsultationRequest
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
        if (!Auth::check()) {
            // Устанавливаем сессионное сообщение и перенаправляем обратно
            return redirect()->route('welcome')->with('error', 'Для заполнения формы пройдите регистрацию/авторизацию');
        }

        return $next($request);
    }
}
