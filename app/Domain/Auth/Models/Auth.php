<?php declare(strict_types = 1);

namespace App\Domain\Auth\Models;

use App\Core\Traits\AddCorrectFactoryTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Eloquent;

class Auth extends Eloquent
{
    use AddCorrectFactoryTrait;

    protected $table = 'password_resets';

    
}