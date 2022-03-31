<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Domain\Auth\Controllers\Authcontroller;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/


// Route::middleware('auth')->group(function () {
     Route::post('login', [AuthController::class, 'login']);
     Route::post('logout', [AuthController::class, 'logout']);
     Route::post('refresh', [AuthController::class, 'refresh']);
     Route::post('me', [AuthController::class, 'me']);
//  });
