<?php

namespace App\Core\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

use Illuminate\Http\Request;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
        $this->addRouteService('api', '',  'App\Domain\Auth\Controllers', 'App\Domain\Auth\Routes\auth.php');
        
    }
    
    /**
     * Create route file links
     *
     * @param String $prefix
     * @param String $middleware
     * @param String $namespace
     * @param String $path
     * 
     * @return void
     */   
    protected function addRouteService(String $prefix, String $middleware, String $namespace, String $path)
    {
        Route::prefix($prefix)->middleware($middleware)->namespace($namespace)->group(base_path($path));
    }
    
    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

}
