<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Interface\Images\Controllers\Imagecontroller;

/*
|--------------------------------------------------------------------------
| Comment Routes
|--------------------------------------------------------------------------
*/

Route::get('', [Imagecontroller::class, 'index']);
Route::get('/{id}', [Imagecontroller::class, 'show']);
Route::post('', [Imagecontroller::class, 'store']);
Route::put('/{id}', [Imagecontroller::class, 'update']);
Route::delete('/{id}', [Imagecontroller::class, 'delete']);
