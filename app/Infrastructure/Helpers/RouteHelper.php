<?php

declare(strict_types=1);

namespace App\Infrastructure\Helpers;

use Illuminate\Support\Facades\Route;

class RouteHelper
{
    public static function RoutePathLoader()
    {
        $paths = glob('App/Interface/' . "*" . '/Routes/' . "*.php");
        $namespace = glob('App/Interface/' . "*" . '/Controllers/');

        foreach ($paths as $path) Route::prefix('api/' . str_replace('.php', '', basename($path)))
            ->namespace($namespace)
            ->group(base_path($path));
    }
}
