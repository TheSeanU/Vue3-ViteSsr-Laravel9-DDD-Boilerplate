<?php

declare(strict_types=1);

namespace App\Application\Providers;

use Illuminate\Support\ServiceProvider;

use App\Application\Interface\RepositoryInterface;
use App\Application\Repository\BaseRepository;

/** 
 * Class BaseRepositoryServiceProvider 
 * @package App\Core\Providers 
 */
class BaseRepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {     
        $this->app->bind(
            RepositoryInterface::class,
            BaseRepository::class
        ); 
    }
}
