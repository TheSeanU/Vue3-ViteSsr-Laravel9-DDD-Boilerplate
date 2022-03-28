<?php declare(strict_types = 1);

namespace App\Domain\Post\Controllers;

use App\Core\Controllers\Controller;

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
        $posts = $this->postRepository->all();

        return new JsonResponse([$posts]);
   }


    public function find(): JsonResponse
    {
        $posts = $this->postRepository->findById('1');

        return new JsonResponse([$posts]);
    }
}