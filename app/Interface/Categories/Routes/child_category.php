<?php

declare(strict_types = 1);

use App\Interface\Categories\Controllers\ChildCategorycontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Comment Routes
|--------------------------------------------------------------------------
*/

Route::get('', [ChildCategorycontroller::class, 'index']);
Route::get('/{id}', [ChildCategorycontroller::class, 'show']);
Route::post('', [ChildCategorycontroller::class, 'store']);
Route::put('/{id}', [ChildCategorycontroller::class, 'update']);
Route::delete('/{id}', [ChildCategorycontroller::class, 'delete']);
