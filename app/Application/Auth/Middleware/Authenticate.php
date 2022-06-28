<?php

declare(strict_types = 1);

namespace App\Application\Auth\Middleware;

use Closure;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class Authenticate
{
    private const COOKIE_NAME = 'Authorization';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof TokenInvalidException) {
                return new Jsonresponse([
                    'status' => 'Token is Invalid',
                    'request' => $request,
                ], 400);
            }

            if ($e instanceof TokenExpiredException) {
                return new Jsonresponse([
                    'status' => 'Token is Expired',
                    'request' => $request,
                ], 400);
            }

            return new Jsonresponse([
                'status' => 'Authorization Token not found',
                'request' => $request,
            ], 400);
        }
        // cookie(self::COOKIE_NAME, "Bearer {$request->cookies}", 60 * 24 * 30, '/', '', true);
        // Cookie::queue(self::COOKIE_NAME, "Bearer {$request->cookies}", 60 * 24 * 30);

        return $next($request);
    }
}
