<?php

namespace TM\Core;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use TM\Core\Infrastructures\Interfaces\RegisterRepositoryInterface;
use TM\Core\Infrastructures\Interfaces\TechnicianRepositoryInterface;
use TM\Core\Repositories\RegisterRepository;
use TM\Core\Repositories\TechnicianRepository;

class CoreServiceProvider extends ServiceProvider
{
    protected $namespace = "TM\\Core\\Controllers";

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'core');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->mapApiRoutes();
    }

    public function register()
    {
        $this->app->bind(
            RegisterRepositoryInterface::class,
            RegisterRepository::class);
        $this->app->bind(
            TechnicianRepositoryInterface::class,
            TechnicianRepository::class
        );
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api/v1/')
            ->namespace($this->namespace)
            ->group(__DIR__ . './../routes/api.php');
    }

}
