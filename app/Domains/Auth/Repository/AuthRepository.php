<?php

declare(strict_types = 1);

namespace App\Domains\Auth\Repository;

use App\Domains\Auth\Interface\AuthInterface;
use App\Domains\Auth\Requests\LoginRequest;
use App\Domains\Auth\Requests\RegisterRequest;
use App\Domains\User\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{
    /**
     * Get a JWT via given credentials.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function loginUser(LoginRequest $request)
    {
        if (!$request->validated()) {
            return new JsonResponse($request->errors(), 422);
        }

        if (!$token = Auth::attempt($request->validated())) {
            return new JsonResponse(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
    }

    /**
     * Register a User.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function registerUser(RegisterRequest $request)
    {
        if (!$request->validated()) {
            return new JsonResponse($request->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
            $request->validated(),
            ['password' => bcrypt($request->password)],
        ));

        return new JsonResponse([
            'message' => 'User successfully registered',
            'user' => $user,
        ], 201);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logoutUser()
    {
        Auth::logout();
        return new JsonResponse(['message' => 'User successfully signed out']);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function loggedinUser()
    {
        return new JsonResponse(Auth::user());
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return new JsonResponse([
            'token' => $token,
            'tokenTTL' => Auth::factory()->getTTL() * 60,
        ]);
    }
}
