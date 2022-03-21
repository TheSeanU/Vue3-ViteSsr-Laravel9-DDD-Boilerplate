<?php declare(strict_types = 1);

namespace App\Domain\Post\Interface;

use App\Domain\Post\Models\Post;
use Illuminate\Support\Collection;

interface PostInterface
{
   public function all(): Collection;
}