<?php declare(strict_types = 1);

namespace App\Core\Providers;

use App\Core\Helpers\FactoryHelper;
use Illuminate\Support\ServiceProvider;

class FactoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {         
        (new FactoryHelper)->FactoryPathLoader();
    }
}
