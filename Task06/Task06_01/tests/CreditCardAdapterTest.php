<?php

namespace App\Tests;

use App\CreditCard;
use App\CreditCardAdapter;
use PHPUnit\Framework\TestCase;

class CreditCardAdapterTest extends TestCase
{
    static $user;
    public static function setUpBeforeClass(): void
    {
        self::$user = new CreditCard('customer@aol.com', 'password');
    }
    public function testPaymentSystem()
    {
        $amount = 300;
        $this->assertSame(
            "Платеж {$amount} прошел!",
            collectMoney(new CreditCardAdapter(self::$user), $amount)
        );
        $this->assertSame(
            "Платеж не прошел!",
            collectMoney(new CreditCardAdapter(self::$user), $amount)
        );
        $this->assertSame(
            "Платеж не прошел!",
            collectMoney(new CreditCardAdapter(self::$user), -50)
        );
    }
}