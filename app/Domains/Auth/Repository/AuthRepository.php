<?php

declare(strict_types = 1);

namespace App\Domains\Auth\Repository;

use App\Domains\Auth\Interface\AuthInterface;
use App\Domains\Auth\Requests\LoginRequest;
use App\Domains\Auth\Requests\RegisterRequest;
use App\Domains\User\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        if ($request['remember_token']) {
            $user = User::where('id', Auth::user()->id)->first();

            $user["remember_token"] = Str::random(8);
            $user->save();
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
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);

        return User::create($validated);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logoutUser()
    {
        return Auth::logout();
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function loggedinUser()
    {
        return Auth::user();
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
