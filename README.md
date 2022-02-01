# Laravel LiqPay
[![Latest Stable Version](http://poser.pugx.org/mallariel/laravelliqpay/v)](https://packagist.org/packages/mallariel/laravelliqpay)
[![Total Downloads](http://poser.pugx.org/mallariel/laravelliqpay/downloads)](https://packagist.org/packages/mallariel/laravelliqpay)
[![License](http://poser.pugx.org/mallariel/laravelliqpay/license)](https://packagist.org/packages/mallariel/laravelliqpay)

# Laravel LiqPay

A Laravel package for the LiqPay PHP SDK.

## Installation
```
composer require mallariel/laravelliqpay
```

Add a ServiceProvider to your providers array in `config/app.php`:
```php
    'providers' => [
    	//other things here

    	Mallariel\LaravelLiqPay\LaravelLiqPayServiceProvider::class,
    ];
```

Add the facade to the facades array:
```php
    'aliases' => [
    	//other things here

    	'LaravelLiqpay' => Mallariel\LaravelLiqPay\Facades\LaravelLiqPay::class,
    ];
```

Finally, publish the configuration files:
```
php artisan vendor:publish --provider="Mallariel\LaravelLiqPay\LaravelLiqPayServiceProvider"
```

## Configuration
Please set your API: `LIQPAY_PUBLIC` and `LIQPAY_PRIVATE` in the `.env` file.

In additional you could set currencies: `LIQPAY_CURRENCIES`