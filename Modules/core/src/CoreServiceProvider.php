<?php

namespace TM\Core;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . './../routes/api.php');
    }

    public function register()
    {

    }
}
