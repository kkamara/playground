<?php

use PHPUnit\Framework\TestCase;
use App\DescendingOrder;

class DescendingOrderTest extends TestCase
{
    public function testDigits() {
        $this->assertSame(
            0, 
            DescendingOrder::execute(0)
        );
        $this->assertSame(
            1, 
            DescendingOrder::execute(1)
        );
    }

    public function testSmallNumbers() {
        $this->assertSame(
            51, 
            DescendingOrder::execute(15)
        );
        $this->assertSame(
            2110, 
            DescendingOrder::execute(1021)
        );
    }

    public function testBigNumbers() {
        $this->assertSame(
            987654321, 
            DescendingOrder::execute(123456789)
        );
    }
}