<?php

namespace App\Application\Auth\Middleware;

use Closure;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException;
use PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException;

use PHPOpenSourceSaver\JWTAuth\Contracts\Providers\JWT as JWTContract;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\JWT;

class Authenticate
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
        try {
            JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof TokenInvalidException){
                return new Jsonresponse([
                    'status' => 'Token is Invalid'
                ], 400);
            }else if ($e instanceof TokenExpiredException){
                return new Jsonresponse([
                    'status' => 'Token is Expired'
                ], 400);
            }else{
                return new Jsonresponse([
                    'status' => 'Authorization Token not found',
                ], 400);
            }
        }
        return $next($request);
    }
}
