<?php declare(strict_types = 1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Core\Providers\RouteServiceProvider;

use App\Domain\Auth\Controllers\Authcontroller;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/


RouteServiceProvider::addRouteService('api', '',  'App\Domain\Auth\Controllers', 'App\Domain\Auth\Routes\auth.php');



Route::get('test', [Authcontroller::class, 'test']);
