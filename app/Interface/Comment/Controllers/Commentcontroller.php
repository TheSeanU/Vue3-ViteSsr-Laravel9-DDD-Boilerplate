<?php declare(strict_types = 1);

namespace App\Interface\Comment\Controllers;

use App\Infrastructure\Controllers\Controller;
use App\Application\Comment\Interface\CommentInterface;

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
