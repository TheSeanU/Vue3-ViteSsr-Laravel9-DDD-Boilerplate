<?php

declare(strict_types = 1);

use App\Interface\Categories\Controllers\Categorycontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Comment Routes
|--------------------------------------------------------------------------
*/

Route::get('', [Categorycontroller::class, 'index']);
Route::get('/{id}', [Categorycontroller::class, 'show']);
Route::post('', [Categorycontroller::class, 'store']);
Route::put('/{id}', [Categorycontroller::class, 'update']);
Route::delete('/{id}', [Categorycontroller::class, 'delete']);
