<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
        $this->app->singleton('authuser', function (){
            return new \stdClass();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
