<?php declare(strict_types = 1);

namespace App\Domain\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Eloquent;

class Post extends Eloquent
{
    use HasFactory;
    
    protected $table = 'posts';

    
}