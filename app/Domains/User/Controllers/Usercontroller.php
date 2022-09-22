<?php

declare(strict_types = 1);

namespace App\Domains\User\Controllers;

use App\Domains\User\Interface\UserInterface;
use App\Domains\User\Models\User;
use App\Infrastructure\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    private $userRepository;

    /**
     * Undocumented function
     *
     * @param UserInterface $userRepository
     */
    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function show(Request $request): JsonResponse
    {
        return new JsonResponse([
            'data' => $this->userRepository->findOrFailUser($request->id),
        ]);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function update(Request $request): JsonResponse
    {
        return new JsonResponse([
            'data' => $this->userRepository->updateUser($request->id, $request->details),
        ]);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     *
     * @return void
     */
    public function destroy(Request $request)
    {
        return $this->userRepository->deleteUser($request->id);
    }
}
