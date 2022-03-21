<?php declare(strict_types = 1);

namespace App\Domain\User\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\JsonResponse;

use App\Domain\User\Interface\UserInterface;

class Usercontroller extends Controller
{
   private $userRepository;
  
   public function __construct(UserInterface $userRepository)
   {
       $this->userRepository = $userRepository;
   }

   public function index()
   {
        $users = $this->userRepository->all();

        return new JsonResponse([
            $users
        ], 401);
   }
}