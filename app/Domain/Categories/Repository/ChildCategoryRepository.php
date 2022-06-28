<?php

declare(strict_types = 1);

namespace App\Domain\Categories\Repository;

use App\Application\Categories\Interface\ChildCategoryInterface;
use App\Domain\Categories\Models\ChildCategory;
use Illuminate\Http\JsonResponse;

class ChildCategoryRepository implements ChildCategoryInterface
{
    public function all(): object
    {
        return ChildCategory::all();
    }

    public function get(string|int $id): JsonResponse
    {
        return ChildCategory::findOrFail($id);
    }

    public function create(array $details): JsonResponse
    {
        return ChildCategory::create($details);
    }

    public function update(string|int $id, array $details): JsonResponse
    {
        return ChildCategory::whereId($id)->update($details);
    }

    public function delete(string|int $id): void
    {
        ChildCategory::destroy($id);
    }
}
