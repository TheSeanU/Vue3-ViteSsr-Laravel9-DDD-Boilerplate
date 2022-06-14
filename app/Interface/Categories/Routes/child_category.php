<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Interface\Categories\Controllers\ChildCategorycontroller;

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