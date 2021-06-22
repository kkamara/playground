<?php

use PHPUnit\Framework\TestCase;
use App\DontGiveMeFive;

class DontGiveMeFiveTest extends TestCase
{
    public function testDontGiveMeFive()
    {
        $this->assertEquals(8, DontGiveMeFive::execute(1,9));
        $this->assertEquals(12, DontGiveMeFive::execute(4,17));
    }
}