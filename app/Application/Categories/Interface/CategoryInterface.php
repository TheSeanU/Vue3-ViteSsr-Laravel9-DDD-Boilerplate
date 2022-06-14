<?php declare(strict_types = 1);

namespace App\Application\Categories\Interface;

use Illuminate\Http\JsonResponse;

interface CategoryInterface
{
   public function all(): object;
   public function get(string|int $id): JsonResponse;
   public function create(array $details): JsonResponse;
   public function update(string|int $id, array $details): JsonResponse;
   public function delete(string|int  $id): void;
}
