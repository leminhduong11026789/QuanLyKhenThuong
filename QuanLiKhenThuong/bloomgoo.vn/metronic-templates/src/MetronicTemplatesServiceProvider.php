<?php

namespace BloomGoo\MetronicTemplates;

use Illuminate\Support\ServiceProvider;

class MetronicTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'metronic-templates');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
