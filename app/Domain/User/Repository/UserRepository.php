<?php

declare(strict_types = 1);

namespace App\Domain\User\Repository;

use App\Application\User\Interface\UserInterface;
use App\Domain\User\Models\User;
use Illuminate\Http\JsonResponse;

class UserRepository implements UserInterface
{
    /**
     * findOrFail user
     *
     * @param  string|int $id
     * @return JsonResponse
     */
    public function get(string|int $id): JsonResponse
    {
        return new JsonResponse(User::findOrFail($id));
    }

    /**
     * Update user where id function
     *
     * @param  string|int $id
     * @param  array      $details
     * @return JsonResponse
     */
    public function update(string|int $id, array $details): JsonResponse
    {
        return User::whereId($id)->update($details);
    }

    /**
     * Delete user function ??
     *
     * @param  string|int $id
     * @return void
     */
    public function delete(string|int $id): void
    {
        User::destroy($id);
    }
}
