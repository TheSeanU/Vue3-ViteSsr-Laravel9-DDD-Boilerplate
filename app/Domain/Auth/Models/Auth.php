<?php declare(strict_types = 1);

namespace App\Domain\Auth\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Eloquent;

class Auth extends Eloquent
{
    use HasFactory;
    
    protected $table = 'password_resets';

    
}