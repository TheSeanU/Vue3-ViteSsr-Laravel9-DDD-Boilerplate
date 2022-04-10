<?php declare(strict_types = 1);

namespace App\Domain\Auth\Interface;

use App\Domain\Auth\Models\Auth;
use App\Domain\Auth\Requests\LoginRequest;
use App\Domain\User\Resources\LoggedInUserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

interface AuthInterface
{
   public function login(LoginRequest $request): array;
   public function logout();
   public function me(): LoggedInUserResource;
   public function refresh();
}