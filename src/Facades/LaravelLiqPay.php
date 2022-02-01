<?php

namespace Mallariel\LaravelLiqPay\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelLiqPay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'liqpay';
    }
}
