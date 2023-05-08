<?php

use App\PaymentAdapterInterface;

function collectMoney(PaymentAdapterInterface $paymentSystem, $amount)
{
    if ($paymentSystem->collectMoney($amount)) {
        return "Платеж {$amount} прошел!";
    } else {
        return "Платеж не прошел!";
    }
}