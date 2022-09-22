<?php

declare(strict_types = 1);

use App\Domains\Auth\Controllers\Authcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::post('login', [Authcontroller::class, 'login']);
Route::post('register', [Authcontroller::class, 'register']);

Route::middleware(['auth:api'])->group(function () {
    Route::post('logout', [Authcontroller::class, 'logout']);
    Route::get('me', [Authcontroller::class, 'me']);
});
