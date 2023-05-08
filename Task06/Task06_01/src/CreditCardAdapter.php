<?php

namespace App;

class CreditCardAdapter implements PaymentAdapterInterface
{
    private $creditcard;
    public function __construct(CreditCard $creditcard)
    {
        $this->creditcard = $creditcard;
    }
    public function collectMoney($amount)
    {
        $response = $this->creditcard->transfer($amount);

        if (mb_strpos($response, 'Authorization code: ') !== false) {
            return true;
        }

        return false;
    }
}