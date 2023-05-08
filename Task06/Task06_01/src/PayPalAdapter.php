<?php

namespace App;

class PayPalAdapter implements PaymentAdapterInterface
{
    private $paypal;
    public function __construct(PayPal $paypal)
    {
        $this->paypal = $paypal;
    }
    public function collectMoney($amount)
    {
        $response = $this->paypal->authorizeTransaction($amount);
        if (mb_strpos($response, 'PayPal Success!') !== false) {
            return true;
        }

        return false;
    }
}