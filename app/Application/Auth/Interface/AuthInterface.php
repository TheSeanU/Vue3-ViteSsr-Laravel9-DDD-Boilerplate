<?php declare(strict_types = 1);

namespace App\Application\Auth\Interface;

use App\Application\Auth\Requests\AuthRequest;

interface AuthInterface
{
   public function login();
   public function logout();
   public function me();
   public function refresh();
}
