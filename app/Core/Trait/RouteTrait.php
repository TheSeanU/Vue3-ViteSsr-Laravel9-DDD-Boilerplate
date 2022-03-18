<?php

namespace App\Core\Trait;

use Illuminate\Support\Facades\Route;

trait RouteTrait
{

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
    public function addRouteService(String $prefix, String $middleware, String $namespace, String $path)
    {
       Route::prefix($prefix)->middleware($middleware)->namespace($namespace)->group(base_path($path));
    }
    
    
    /**
     * Handle the Branch "created" event.
     *
     * @param  \App\Branch  $branch
     * @return void
     */
    public function created(Branch $branch)
    {
        //
    }

    /**
     * Handle the Branch "updated" event.
     *
     * @param  \App\Branch  $branch
     * @return void
     */
    public function updated(Branch $branch)
    {
        //
    }

    /**
     * Handle the Branch "deleted" event.
     *
     * @param  \App\Branch  $branch
     * @return void
     */
    public function deleted(Branch $branch)
    {
        //
    }

    /**
     * Handle the Branch "restored" event.
     *
     * @param  \App\Branch  $branch
     * @return void
     */
    public function restored(Branch $branch)
    {
        //
    }

    /**
     * Handle the Branch "force deleted" event.
     *
     * @param  \App\Branch  $branch
     * @return void
     */
    public function forceDeleted(Branch $branch)
    {
        //
    }
}
