<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Domain\User\Controllers\Usercontroller;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('user', [Usercontroller::class, 'index']);
