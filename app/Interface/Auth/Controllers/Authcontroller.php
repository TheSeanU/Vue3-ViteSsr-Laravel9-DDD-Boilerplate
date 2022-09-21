<?php

declare(strict_types = 1);

namespace App\Interface\Auth\Controllers;

use App\Application\Auth\Interface\AuthInterface;
use App\Application\Auth\Requests\LoginRequest;
use App\Application\Auth\Requests\RegisterRequest;
use App\Infrastructure\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class Authcontroller extends Controller
{
    protected $authInterface;

    /**
     * Create a new AuthController instance.
     *
     * @param AuthInterface $authInterface
     *
     * @return void
     */
    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        return $this->authInterface->loginUser($request);
    }

    /**
     * Register a User.
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        return new JsonResponse($this->authInterface->registerUser($request));
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        return new JsonResponse($this->authInterface->logoutUser());
    }
    
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return new JsonResponse($this->authInterface->loggedinUser());
    }
}
