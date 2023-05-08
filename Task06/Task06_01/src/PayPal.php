<?php

namespace App;

class PayPal
{
    private $email;
    private $password;
    private $bill;
    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
        $this->bill = 500;
    }
    public function authorizeTransaction($amount)
    {
        if ((0 < $amount) && ($amount < $this->bill)) {
            $this->bill -= $amount;
            return "PayPal Success!";
        } else {
            return "Failure";
        }
    }
}