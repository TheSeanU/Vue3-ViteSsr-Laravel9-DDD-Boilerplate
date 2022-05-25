<?php declare(strict_types = 1);

namespace App\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Configuration String
     */
    const CONFIG_STRING = 'bindings';


    /**
     * Service Provider Registration
     *
     * @access public
     */
    public function register()
    {
        if (!empty(Config::get(self::CONFIG_STRING))) {
            $this->registerBindingGroups(Config::get(self::CONFIG_STRING));
        }
    }


    /**
     * Register Infrastructure Binding Groups
     *
     * @access private
     * @param array $groups
     */
    private function registerBindingGroups(array $groups)
    {
        foreach ($groups as $bindings) {
            $this->registerBindings($bindings);
        }
    }


    /**
     * Register Infrastructure Bindings
     *
     * @access private
     * @param array $bindings
     */
    private function registerBindings(array $bindings)
    {
        foreach ($bindings as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
