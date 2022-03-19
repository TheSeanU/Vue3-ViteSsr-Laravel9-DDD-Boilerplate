<?php declare(strict_types = 1);

namespace App\Domain\Auth\Models;

use App\Core\Traits\AddCorrectFactoryTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Domain\Auth\Database\Factories\AuthFactory;

use Eloquent;

class Auth extends Eloquent
{
    use HasFactory;
    
    protected $table = 'password_resets';

    
}