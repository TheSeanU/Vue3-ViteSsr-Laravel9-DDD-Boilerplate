<?php

declare(strict_types = 1);

namespace App\Interface\Admins\Controllers;

use App\Application\Admins\Interface\AdminInterface;
use App\Infrastructure\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Admincontroller extends Controller
{
    private $adminRepository;

    public function __construct(AdminInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->adminRepository->all(),
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        return new JsonResponse([
            'data' => $this->adminRepository->create([
                'user_id' => $request->user_id,
                'types' => $request->types,
            ]) ], Response::HTTP_CREATED);
    }

    public function show(Request $request): JsonResponse
    {
        $id = $request->id;

        return response()->json([
            'data' => $this->adminRepository->get($id),
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $orderDetails = $request->only([
            'client',
            'details',
        ]);

        return response()->json([
            'data' => $this->adminRepository->update($orderId, $orderDetails),
        ]);
    }

    public function destroy(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $this->adminRepository->delete($orderId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
