<?php declare(strict_types = 1);

namespace App\Application\Auth\Interface;

use Illuminate\Http\Request;

interface AuthInterface
{
   public function login(Request $request);
   public function register(Request $request);
   public function logout();
   public function me();
   public function refresh();
}
