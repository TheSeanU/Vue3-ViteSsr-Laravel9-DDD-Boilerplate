<?php

declare(strict_types = 1);

namespace App\Interface\User\Controllers;

use App\Application\User\Interface\UserInterface;
use App\Domain\User\Models\User;
use App\Infrastructure\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Usercontroller extends Controller
{
    private $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function index()
    {
        return User::all();
    }

    public function show(Request $request): JsonResponse
    {
        $orderId = $request->route('id');

        return new JsonResponse([
            'data' => $this->userRepository->get($orderId),
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $orderDetails = $request->only([
            'client',
            'details',
        ]);

        return new JsonResponse([
            'data' => $this->userRepository->update($orderId, $orderDetails),
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $this->userRepository->delete($orderId);

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}
