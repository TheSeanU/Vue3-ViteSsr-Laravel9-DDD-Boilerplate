<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Interface\Products\Controllers\Productcontroller;

/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/

Route::get('', [Productcontroller::class, 'index']);
Route::get('/{id}', [Productcontroller::class, 'show']);
Route::post('', [Productcontroller::class, 'store']);
Route::put('/{id}', [Productcontroller::class, 'update']);
Route::delete('/{id}', [Productcontroller::class, 'delete']);
