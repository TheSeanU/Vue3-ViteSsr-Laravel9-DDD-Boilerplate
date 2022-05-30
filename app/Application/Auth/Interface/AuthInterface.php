<?php declare(strict_types = 1);

namespace App\Application\Auth\Interface;

use App\Application\Auth\Requests\LoginRequest;
use App\Domain\User\Resources\LoggedInUserResource;

interface AuthInterface
{
   public function login(LoginRequest $request): array;
   public function logout();
   public function me(): LoggedInUserResource;
   public function refresh();
}
