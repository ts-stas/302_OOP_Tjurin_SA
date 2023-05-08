<?php

namespace App\Tests;

use App\PayPal;
use App\PayPalAdapter;
use PHPUnit\Framework\TestCase;

class PayPalAdapterTest extends TestCase
{
    static $user;
    public static function setUpBeforeClass(): void
    {
        self::$user = new PayPal('customer@aol.com', 'password');
    }
    public function testPaymentSystem()
    {
        $amount = 300;
        $this->assertSame(
            "Платеж {$amount} прошел!",
            collectMoney(new PayPalAdapter(self::$user), $amount)
        );
        $this->assertSame(
            "Платеж не прошел!",
            collectMoney(new PayPalAdapter(self::$user), $amount)
        );
        $this->assertSame(
            "Платеж не прошел!",
            collectMoney(new PayPalAdapter(self::$user), -50)
        );
    }
}