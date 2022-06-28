<?php

declare(strict_types = 1);

namespace App\Infrastructure\Helpers;

use Illuminate\Support\Facades\Route;

class RouteHelper
{
    public static function RoutePathLoader()
    {
        $paths = glob('App/Interface/' . "*" . '/Routes/' . "*.php");

        foreach ($paths as $path) {
            Route::prefix('api/' . pathinfo($path)["filename"])
                ->namespace($path)
                ->group(base_path($path));
        }
    }
}
