<?php

declare(strict_types = 1);

namespace App\Domains\User\Repository;

use App\Application\User\Interface\UserInterface;
use App\Domains\User\Models\User;
use Illuminate\Http\JsonResponse;

class UserRepository implements UserInterface
{
    /**
     * Find or fail user
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function findOrFailUser(int $id): JsonResponse
    {
        return new JsonResponse(User::findOrFail($id));
    }

    /**
     * Update user function
     *
     * @param int   $id
     * @param array $details
     *
     * @return JsonResponse
     */
    public function updateUser(int $id, array $details): JsonResponse
    {
        return User::whereId($id)->update($details);
    }

    /**
     * Delete user function
     *
     * @param int $id
     *
     * @return NoContentResponse;
     */
    public function deleteUser(int $id)
    {
        return User::destroy($id);
    }
}
