<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Interface\Admins\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Comment Routes
|--------------------------------------------------------------------------
*/

Route::get('', [AdminController::class, 'index']);
Route::get('/{id}', [AdminController::class, 'show']);
Route::post('', [AdminController::class, 'store']);
Route::put('/{id}', [AdminController::class, 'update']);
Route::delete('/{id}', [AdminController::class, 'delete']);