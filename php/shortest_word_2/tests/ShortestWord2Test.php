<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\ShortestWord2;

class ShortestWord2Test extends TestCase 
{
    private function doTest(string $s, int $expected) {
        $this->assertSame(
            $expected, 
            ShortestWord2::execute($s), 
            "Incorrect answer for findShort(\"$s\")"
        );
    }

    public function testSample() {
        $this->doTest("bitcoin take over the world maybe who knows perhaps", 3);
        $this->doTest("turns out random test cases are easier than writing out basic ones", 3);
        $this->doTest("Let's travel abroad shall we", 2);
    }
}


