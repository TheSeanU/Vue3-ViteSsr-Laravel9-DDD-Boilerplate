<?php declare(strict_types = 1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Domain\Auth\Controllers\Authcontroller;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('test', [Authcontroller::class, 'test']);
