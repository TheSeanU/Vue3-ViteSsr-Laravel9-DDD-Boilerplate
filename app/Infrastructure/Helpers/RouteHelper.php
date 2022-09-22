<?php

declare(strict_types = 1);

namespace App\Infrastructure\Helpers;

use Illuminate\Support\Facades\Route;

class RouteHelper
{
    /**
     * Route path loader
     *
     * @return void
     */
    public static function routePathLoader()
    {
        $paths = glob('App\\Domains\\*\\Routes\\*.php');

        foreach ($paths as $path) {
            Route::prefix('api/' . pathinfo($path)["filename"])
                ->namespace($path)
                ->group(base_path($path));
        }
    }
}
