<?php declare(strict_types = 1);

namespace App\Domain\User\Interface;

use Illuminate\Support\Collection;

interface UserInterface
{   
   public function all(): Collection;
   // public function create(array  $data): Collection;
   // public function update(array $data, $id): Collection;
   // public function delete($id): Collection;
   public function findorfail($id): Collection;
}