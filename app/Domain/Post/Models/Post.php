<?php declare(strict_types = 1);

namespace App\Domain\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\{HasMany, HasOne};

use App\Domain\Comment\Models\Comment;
use App\Domain\User\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    public function users(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    
}