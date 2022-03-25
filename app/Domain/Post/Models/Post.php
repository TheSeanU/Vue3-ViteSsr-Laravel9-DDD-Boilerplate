<?php declare(strict_types = 1);

namespace App\Domain\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Eloquent;
class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    
}