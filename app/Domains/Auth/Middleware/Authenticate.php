<?php

declare(strict_types = 1);

namespace App\Domains\Auth\Middleware;

use Closure;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
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
                    'request' => $e,
                ], 400);
            }

            if ($e instanceof TokenExpiredException) {
                return new Jsonresponse([
                    'status' => 'Token is Expired',
                    'request' => $e,
                ], 400);
            }

            return new Jsonresponse([
                'status' => 'Authorization Token not found',
                'request' => $e,
            ], 400);
        }

        return $next($request);
    }
}
