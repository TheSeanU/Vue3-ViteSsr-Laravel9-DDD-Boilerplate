<?php declare(strict_types = 1);

namespace App\Domain\Post\Models;

use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Eloquent;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}