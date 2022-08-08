<?php

declare(strict_types = 1);

namespace App\Domain\Products\Repository;

use App\Application\Products\Interface\ProductInterface;
use App\Domain\Products\Models\Product;
use Illuminate\Http\JsonResponse;

class ProductRepository implements ProductInterface
{
    public function all(): object
    {
        return Product::all();
    }

    public function get(string|int $id): JsonResponse
    {
        return Product::findOrFail($id);
    }

    public function create(array $details): JsonResponse
    {
        return Product::create($details);
    }

    public function update(string|int $id, array $details): JsonResponse
    {
        return Product::whereId($id)->update($details);
    }

    public function delete(string|int $id): void
    {
        Product::destroy($id);
    }
}
