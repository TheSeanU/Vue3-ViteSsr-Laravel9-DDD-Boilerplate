<?php declare(strict_types = 1);

namespace App\Interface\User\Controllers;

use App\Infrastructure\Controllers\Controller;

use App\Application\User\Interface\UserInterface;
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

   public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->userRepository->all()
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $orderDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json(
            [
                'data' => $this->userRepository->create($orderDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse
    {
        $orderId = $request->route('id');

        return response()->json([
            'data' => $this->userRepository->get($orderId)
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $orderDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json([
            'data' => $this->userRepository->update($orderId, $orderDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $this->userRepository->delete($orderId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }


}
