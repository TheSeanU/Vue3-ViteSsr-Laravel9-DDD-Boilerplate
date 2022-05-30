<?php declare(strict_types=1);

namespace App\Interface\Auth\Controllers;

use App\Infrastructure\Controllers\Controller;

use App\Application\Auth\Interface\AuthInterface;
use Illuminate\Http\JsonResponse;

class Authcontroller extends Controller
{
    private $authRepository;

    public function __construct(AuthInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(): JsonResponse
    {
        return new JsonResponse([$this->authRepository->login]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(): JsonResponse
    {
        return new JsonResponse([$this->authRepository->me()]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(): JsonResponse
    {
        return new JsonResponse([$this->authRepository->logout()]);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh(): JsonResponse
    {
        return new JsonResponse([$this->authRepository->refresh()]);
    }

}
