<?php

namespace Zhufq\Laraenv;

use Illuminate\Support\ServiceProvider;

class EnvServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('zhuenv', function () {
            return new EnvCore();
        });
    }
}
