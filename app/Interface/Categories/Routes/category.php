<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Interface\Categories\Controllers\Categorycontroller;

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