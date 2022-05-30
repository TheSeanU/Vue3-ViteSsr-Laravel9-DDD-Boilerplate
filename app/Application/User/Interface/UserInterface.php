<?php declare(strict_types = 1);

namespace App\Application\User\Interface;

use Illuminate\Support\Collection;

interface UserInterface
{
   public function all(): Collection;
   public function findById($id): Collection;
   // public function create(array  $data): Collection;
   // public function update(array $data, $id): Collection;
   // public function delete($id): Collection;
}
