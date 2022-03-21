<?php declare(strict_types = 1);

namespace App\Domain\User\Interface;

use App\Domain\User\Models\User;

use Illuminate\Support\Collection;

interface UserInterface
{
   public function all(): Collection;
}