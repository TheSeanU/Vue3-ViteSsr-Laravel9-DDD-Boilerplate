<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Interface\User\Controllers\Usercontroller;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('', [Usercontroller::class, 'index']);
Route::get('/{id}', [Usercontroller::class, 'show']);
Route::post('', [Usercontroller::class, 'store']);
Route::put('/{id}', [Usercontroller::class, 'update']);
Route::delete('/{id}', [Usercontroller::class, 'delete']);



