<?php

namespace Restoore\SystempayWebservice;

use Illuminate\Support\ServiceProvider;

class SystempayWebserviceServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        //Publishes package config file to applications config folder
        $this->publishes([__DIR__ . '/../config/systempay_webservice.php' => config_path('systempay_webservice.php')], 'config');
        $this->publishes([__DIR__ . '/../tests/' => base_path('tests')], 'tests');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SystempayWebservice::class, function ($app) {
            return new SystempayWebservice();
        });
        $this->app->bind('systempayWebservice', 'Restoore\SystempayWebservice\SystempayWebservice');
    }

    /**
     * Only load library if she is called
     * @return array
     */
    public function provides()
    {
        return ['systempayWebservice'];
    }

}