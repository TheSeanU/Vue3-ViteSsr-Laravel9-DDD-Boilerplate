<?php

declare(strict_types = 1);

namespace App\Application\User\Interface;

use Illuminate\Http\JsonResponse;

interface UserInterface
{
    public function get(string|int $id): JsonResponse;

    public function update(string|int $id, array $details): JsonResponse;

    public function delete(string|int $id): void;
}
