<?php declare(strict_types = 1);

namespace App\Interface\Categories\Controllers;

use App\Infrastructure\Controllers\Controller;
use App\Application\Categories\Interface\CategoryInterface;

use Illuminate\Http\JsonResponse;

class Categorycontroller extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(): JsonResponse
    {
        return new JsonResponse([$this->categoryRepository->all()]);
    }

    public function find(): JsonResponse
    {
        return new JsonResponse([$this->categoryRepository->findById('1')]);
    }
}
