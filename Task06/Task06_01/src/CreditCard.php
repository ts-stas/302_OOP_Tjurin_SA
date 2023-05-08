<?php

namespace App;

class CreditCard
{
    private $cardNumber;
    private $cardDate;
    private $bill;
    public function __construct($cardNumber, $cardDate)
    {
        $this->cardNumber = $cardNumber;
        $this->cardDate = $cardDate;
        $this->bill = 500;
    }
    public function transfer($amount)
    {
        if ((0 < $amount) && ($amount < $this->bill)) {
            $this->bill -= $amount;
            return "Authorization code: 123456";
        } else {
            return "";
        }
    }
}