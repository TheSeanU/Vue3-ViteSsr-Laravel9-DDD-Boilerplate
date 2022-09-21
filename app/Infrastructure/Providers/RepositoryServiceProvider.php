<?php

declare(strict_types = 1);

namespace App\Infrastructure\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Configuration String
     */
    private const CONFIG_STRING = 'bindings';

    /**
     * Service Provider Registration
     *
     * @access public
     *
     * @return void
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
     * @param array $groups
     *
     * @access private
     *
     * @return void
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
     * @param array $bindings
     *
     * @access private
     *
     * @return void
     */
    private function registerBindings(array $bindings)
    {
        foreach ($bindings as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
