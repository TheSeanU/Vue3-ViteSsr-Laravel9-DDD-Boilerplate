<?php declare(strict_types = 1);

namespace App\Domain\Admins\Repository;

use App\Application\Admins\Interface\AdminInterface;
use App\Domain\Admins\Models\Admin;
use Illuminate\Http\JsonResponse;

class AdminRepository implements AdminInterface
{
    public function all(): object
    {
        return Admin::all();
    }

    public function get(string|int $id): JsonResponse
    {
        return Admin::findOrFail($id);
    }
    
    public function create(array $details)
    {
        return Admin::create($details);
    }
    
    public function update(string|int $id, array $details): JsonResponse
    {
        return Admin::whereId($id)->update($details);
    }
    
    public function delete(string|int $id): void
    {
        Admin::destroy($id);
    }
}
