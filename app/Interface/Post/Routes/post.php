<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Interface\Post\Controllers\Postcontroller;

/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
*/

Route::get('index', [Postcontroller::class, 'index']);
Route::get('{post}', [Postcontroller::class, 'find']);
