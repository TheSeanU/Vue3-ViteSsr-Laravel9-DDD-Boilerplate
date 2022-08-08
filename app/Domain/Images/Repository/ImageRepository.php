<?php

declare(strict_types = 1);

namespace App\Domain\Images\Repository;

use App\Application\Images\Interface\ImageInterface;
use App\Domain\Images\Models\Image;
use Illuminate\Http\JsonResponse;

class ImageRepository implements ImageInterface
{
    public function all(): object
    {
        return Image::all();
    }

    public function get(string|int $id): JsonResponse
    {
        return Image::findOrFail($id);
    }
    
    public function create(array $details): JsonResponse
    {
        return Image::create($details);
    }
    
    public function update(string|int $id, array $details): JsonResponse
    {
        return Image::whereId($id)->update($details);
    }
    
    public function delete(string|int $id): void
    {
        Image::destroy($id);
    }
}
