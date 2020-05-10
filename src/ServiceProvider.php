<?php

namespace Cuuuuuirz\F2FPay;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(F2FPay::class, function(){
            return new Weather(config('f2fpay'));
        });

        $this->app->alias(F2FPay::class, 'f2fpay');
    }

    public function provides()
    {
        return [F2FPay::class, 'f2fpay'];
    }
}