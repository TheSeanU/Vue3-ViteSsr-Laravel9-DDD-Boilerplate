<?php

declare(strict_types = 1);

namespace App\Interface\Categories\Controllers;

use App\Application\Categories\Interface\ChildCategoryInterface;
use App\Infrastructure\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ChildCategorycontroller extends Controller
{
    private $childCategoryRepository;

    public function __construct(ChildCategoryInterface $childCategoryRepository)
    {
        $this->childCategoryRepository = $childCategoryRepository;
    }

    public function index(): JsonResponse
    {
        return new JsonResponse([$this->childCategoryRepository->all()]);
    }

    public function find(): JsonResponse
    {
        return new JsonResponse([$this->childCategoryRepository->findById('1')]);
    }
}
