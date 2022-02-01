<?php

namespace Mallariel\LaravelLiqPay\Support;

class LaravelLiqPay extends \LiqPay
{

    public function __construct($public_key, $private_key, $currencies = [])
    {
        parent::__construct($public_key, $private_key);

        if (!empty($currencies)) {
            $this->_supportedCurrencies = $currencies;
        }
    }

}