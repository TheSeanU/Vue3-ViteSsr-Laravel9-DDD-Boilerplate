<?php declare(strict_types = 1);

namespace App\Domain\Auth\Interface;

use App\Domain\Auth\Models\Auth;
use Illuminate\Support\Collection;

interface AuthInterface
{
   public function login();
   public function logout();
   public function me();
   public function refresh();
}