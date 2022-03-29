<?php

declare(strict_types=1);

namespace App\Application\Helpers;

use Illuminate\Support\Facades\Route;

class RouteHelper
{
    public static function RoutePathLoader()
    {
        $paths = glob('App/Domain/' . "*" . '/Routes/' . "*.php");
        $namespace = glob('App/Domain/' . "*" . '/Controllers/');

        foreach ($paths as $path) Route::prefix('api/' . str_replace('.php', '', basename($path)))
            ->namespace($namespace)
            ->group(base_path($path));
    }
}
