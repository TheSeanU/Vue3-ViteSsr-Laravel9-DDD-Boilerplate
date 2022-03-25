<?php declare(strict_types = 1);

namespace App\Domain\User\Controllers;

use Illuminate\Http\JsonResponse;

use App\Core\Controllers\Controller;
use App\Domain\User\Interface\UserInterface;

class Usercontroller extends Controller
{
     private $userRepository;

     public function __construct(UserInterface $userRepository)
     {
          $this->userRepository = $userRepository;
     }

     public function index(): JsonResponse
     {
          $users = $this->userRepository->all();

          return new JsonResponse([
               $users
          ]);
     }
}