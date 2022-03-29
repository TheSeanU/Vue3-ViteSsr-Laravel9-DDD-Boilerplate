<?php declare(strict_types = 1);

namespace App\Domain\Comment\Controllers;

use App\Application\Controllers\Controller;
use App\Domain\Comment\Interface\CommentInterface;
use App\Domain\Comment\Models\Comment;
use Illuminate\Http\JsonResponse;

class Commentcontroller extends Controller
{
    private $commentRepository;
  
    public function __construct(CommentInterface $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function index(): JsonResponse
    {
        return new JsonResponse([$this->commentRepository->all()]);
    }

    public function find(): JsonResponse
    {
        return new JsonResponse([$this->commentRepository->findById('1')]);
    }
}