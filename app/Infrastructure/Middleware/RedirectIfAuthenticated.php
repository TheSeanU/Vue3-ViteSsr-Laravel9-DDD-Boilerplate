<?php

declare(strict_types = 1);

namespace App\Infrastructure\Middleware;

use App\Infrastructure\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @param Closure $next
     * @param [type]  ...$guards
     *
     * @return void
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::class);
            }
        }

        return $next($request);
    }
}
