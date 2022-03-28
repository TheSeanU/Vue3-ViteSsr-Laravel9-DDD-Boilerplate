<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Domain\Comment\Controllers\Commentcontroller;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('index', [Commentcontroller::class, 'index']);
Route::get('{comment}', [Commentcontroller::class, 'find']);
