<?php

use PHPUnit\Framework\TestCase;
use App\VowelCount;

class VowelCountTest extends TestCase
{
    private function doTest(string $s, int $expected)
    {
        $this->assertSame(
            $expected,
            VowelCount::execute($s),
            "getCount('$s') returned an incorrect answer.",
        );
    }

    public function testSampleTests()
    {
        $this->doTest("aeiou", 5);
        $this->doTest("y", 0);
        $this->doTest("bcdfghjklmnpqrstvwxz y", 0);
        $this->doTest("", 0);
        $this->doTest("abracadabra", 5);
    }
}