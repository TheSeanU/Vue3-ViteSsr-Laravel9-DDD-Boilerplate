<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Interface\Auth\Controllers\Authcontroller;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::user('me', [AuthController::class, 'me']);
