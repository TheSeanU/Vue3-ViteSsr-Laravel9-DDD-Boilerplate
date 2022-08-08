<?php

declare(strict_types = 1);

namespace App\Interface\Images\Controllers;

use App\Application\Images\Interface\ImageInterface;
use App\Infrastructure\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class Imagecontroller extends Controller
{
    private $categoryRepository;

    public function __construct(ImageInterface $categoryRepository)
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
