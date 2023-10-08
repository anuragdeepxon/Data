<?php

namespace SecPHP\Data\src;

use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function register()
    {
        //
    }
}
