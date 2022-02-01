<?php

namespace Mallariel\LaravelLiqPay;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class LaravelLiqPayServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/liqpay.php' => config_path('liqpay.php'),
        ]);
    }

    public function register()
    {
        $this->app->bind('liqpay', 'Mallariel\LaravelLiqPay\LaravelLiqPayService');
    }

    public function provides()
    {
        return ['liqpay'];
    }
}
