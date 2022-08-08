<?php

declare(strict_types = 1);

namespace App\Domain\Products\Models;

use App\Domain\Admins\Models\Admin;
use App\Domain\Categories\Models\Category;
use App\Domain\Images\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(Admin::class);
    }
}
