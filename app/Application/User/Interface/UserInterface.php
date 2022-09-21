<?php

declare(strict_types = 1);

namespace App\Application\User\Interface;

use Illuminate\Http\JsonResponse;

interface UserInterface
{
    /**
     * Find or fail user function
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function findOrFailUser(int $id): JsonResponse;

    /**
     * User update function
     *
     * @param int   $id
     * @param array $details
     *
     * @return JsonResponse
     */
    public function updateUser(int $id, array $details): JsonResponse;

    /**
     * User delete function
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function deleteUser(int $id);
}
