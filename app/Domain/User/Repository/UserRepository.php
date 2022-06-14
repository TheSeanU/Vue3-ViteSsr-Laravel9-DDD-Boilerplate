<?php declare(strict_types = 1);

namespace App\Domain\User\Repository;

use App\Domain\User\Models\User;

use App\Application\User\Interface\UserInterface;
use Illuminate\Http\JsonResponse;

class UserRepository implements UserInterface
{
    public function all(): object
    {
        return User::all();
    }

    public function get(string|int $id): JsonResponse
    {
        return User::findOrFail($id);
    }

    public function create(array $details): JsonResponse
    {
        return User::create($details);
    }

    public function update(string|int $id, array $details): JsonResponse
    {
        return User::whereId($id)->update($details);
    }

    public function delete(string|int $id): void
    {
        User::destroy($id);
    }
}
