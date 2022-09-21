<?php

declare(strict_types = 1);

use App\Interface\User\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('', [Usercontroller::class, 'index']); // remove after development

Route::get('/{id}', [Usercontroller::class, 'show']);
Route::post('/{id}', [Usercontroller::class, 'update']);
Route::delete('/{id}', [Usercontroller::class, 'delete']);
