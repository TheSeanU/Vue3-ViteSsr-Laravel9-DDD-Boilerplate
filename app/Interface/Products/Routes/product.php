<?php

declare(strict_types = 1);

use App\Interface\Products\Controllers\Productcontroller;
use Illuminate\Support\Facades\Route;

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
