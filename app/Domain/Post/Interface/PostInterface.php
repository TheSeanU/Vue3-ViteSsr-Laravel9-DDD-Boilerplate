<?php declare(strict_types = 1);

namespace App\Domain\Post\Interface;

use App\Domain\Post\Models\Post;
use Illuminate\Support\Collection;

interface PostInterface
{
   public function all(): Collection;
   // public function create(array  $data): Collection;
   // public function update(array $data, $id): Collection;
   // public function delete($id): Collection;
   // public function find($id): Collection;
}