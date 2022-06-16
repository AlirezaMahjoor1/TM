<?php

namespace TM\Notification;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    protected $namespace = "TM\\Notification\\Controllers";

    public function boot()
    {
        $this->mapApiRoutes();
    }

    public function register()
    {

    }

    protected function mapApiRoutes()
    {
        Route::prefix('api/v1/')
//            ->namespace($this->namespace)
            ->group(__DIR__ . './../routes/api.php');
    }

}
