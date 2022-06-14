<?php

namespace TM\Core;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    protected $namespace = "TM\\Core\\Controllers";

    public function boot()
    {
       $this->loadMigrationsFrom(__DIR__.'./../database/migrations');
        $this->mapApiRoutes();
    }

    public function register()
    {

    }

    protected function mapApiRoutes()
    {
        Route::prefix('api/v1/')
            ->namespace($this->namespace)
            ->group(__DIR__.'./../routes/api.php');
    }
}
