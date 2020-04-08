<?php

namespace Ericc2eric\SenangPay\Tests;

use Eeric2eric\SenangPay\Facades\SenangPay;
use Eeric2eric\SenangPay\ServiceProvider;
use Orchestra\Testbench\TestCase;

class SenangPayTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'senang-pay' => SenangPay::class,
        ];
    }

    public function testExample()
    {
        assertEquals(1, 1);
    }
}
