<?php declare(strict_types = 1);

namespace App\Domain\Images\Models;

use App\Domain\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}