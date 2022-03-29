<?php declare(strict_types = 1);

namespace App\Domain\Post\Controllers;

use App\Application\Controllers\Controller;
use App\Domain\Post\Interface\PostInterface;
use Illuminate\Http\JsonResponse;

class Postcontroller extends Controller
{
    private $postRepository;
  
    public function __construct(PostInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index(): JsonResponse
    {
        return new JsonResponse([$this->postRepository->all()]);
    }

    public function find(): JsonResponse
    {
        return new JsonResponse([$this->postRepository->findById('1')]);
    }
}