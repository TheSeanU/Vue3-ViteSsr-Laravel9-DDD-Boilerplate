<?php declare(strict_types = 1);

namespace App\Domain\Post\Controllers;

use App\Core\Controllers\Controller;

use App\Domain\Post\Interface\PostInterface;

class Postcontroller extends Controller
{
   private $postRepository;
  
   public function __construct(PostInterface $postRepository)
   {
       $this->postRepository = $postRepository;
   }

   public function index()
   {
        $posts = $this->postRepository->all();

        return new JsonResponse([
            $posts
        ], 401);
   }
}