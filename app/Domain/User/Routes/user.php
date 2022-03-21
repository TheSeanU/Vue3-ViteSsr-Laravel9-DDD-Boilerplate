<?php declare(strict_types = 1);

use Illuminate\Support\Facades\Route;

use App\Core\Http\Middleware\EnsureTokenIsValid;
use App\Domain\User\Controllers\Usercontroller;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/


Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('user', [Usercontroller::class, 'index']);
});
