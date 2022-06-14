<?php declare(strict_types = 1);

namespace App\Domain\Categories\Repository;

use App\Application\Categories\Interface\CategoryInterface;

use App\Domain\Categories\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryRepository implements CategoryInterface
{
    public function all(): object
    {
        return Category::all();
    }

    public function get(string|int $id): JsonResponse
    {
        return Category::findOrFail($id);
    }
    
    public function create(array $details): JsonResponse
    {
        return Category::create($details);
    }
    
    public function update(string|int $id, array $details): JsonResponse
    {
        return Category::whereId($id)->update($details);
    }
    
    public function delete(string|int $id): void
    {
        Category::destroy($id);
    }
}
