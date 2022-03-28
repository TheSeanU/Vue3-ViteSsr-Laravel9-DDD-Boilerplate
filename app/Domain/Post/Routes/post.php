<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Domain\Post\Controllers\Postcontroller;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('index', [Postcontroller::class, 'index']);
Route::get('{post}', [Postcontroller::class, 'find']);
