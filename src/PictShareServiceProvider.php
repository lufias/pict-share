<?php

namespace Lufias\PictShare;

use Illuminate\Support\ServiceProvider;

class PictShareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('PictShare', 'Lufias\PictShare\PictShare');
    }
}
