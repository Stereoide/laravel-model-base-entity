<?php

namespace Stereoide\ModelBaseEntity;

use Illuminate\Support\ServiceProvider;

class ModelBaseEntityServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        /* Config file */
        
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('modelbaseentity.php')
        ], 'config');
        
        /* Database migrations */
        
        $this->publishes([
            __DIR__.'/migrations' => database_path('migrations')
        ], 'migrations');        
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}