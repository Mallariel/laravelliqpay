<?php

namespace Mallariel\LaravelLiqPay;

use Mallariel\LaravelLiqPay\Support\LaravelLiqPay as AbstractLiqPay;

class LaravelLiqPayService
{
    protected $liqpay;

    public function __construct()
    {
        $this->liqpay = new AbstractLiqPay(config('liqpay.public_key'), config('liqpay.private_key'), config('liqpay.currencies'));
    }

    public function pay(
        $amount = 1.00,
        $currency = 'UAH',
        $description = 'foo',
        $order_id = "bar",
        $result_url = "",
        $server_url = ""
    )
    {
        $form = $this->liqpay->cnb_form(array(
            'action' => 'pay',
            'amount' => $amount,
            'currency' => $currency,
            'description' => $description,
            'order_id' => $order_id,
            'version' => '3',
            'result_url' => $result_url,
            'server_url' => $server_url
        ));

        return $form;
    }

    public function status($order_id)
    {
        if (!isset($order_id)) {
            throw new \InvalidArgumentException('order_id is null');
        }

        $data = $this->liqpay->api("request", array(
            'action' => 'status',
            'version' => '3',
            'order_id' => $order_id
        ));

        return json_encode($data, TRUE);
    }

}