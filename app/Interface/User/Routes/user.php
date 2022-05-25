<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Interface\User\Controllers\Usercontroller;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('index', [ Usercontroller::class, 'index']);
Route::get('{user}', [ Usercontroller::class, 'find']);
