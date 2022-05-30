<?php declare(strict_types = 1);

namespace App\Application\Post\Interface;

use Illuminate\Support\Collection;

interface PostInterface
{
   public function all(): Collection;
   public function findById($id): Collection;
   // public function create(array  $data): Collection;
   // public function update(array $data, $id): Collection;
   // public function delete($id): Collection;
}
