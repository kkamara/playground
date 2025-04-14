<?php

use PHPUnit\Framework\TestCase;
use App\CountDivisors;

class CountDivisorsTest extends TestCase
{
    private function doTest(int $n, int $expected) {
        $this->assertSame(
            $expected,
            CountDivisors::execute($n),
            "divisors($n) returned an incorrect answer.",
        );
    }

    public function testSampleTests() {
        $this->doTest(1, 1);
        $this->doTest(10, 4);
        $this->doTest(11, 2);
        $this->doTest(54, 8);
        $this->doTest(64, 7);
    }
}