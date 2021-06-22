<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\ShortestWord;

class ShortestWordTest extends TestCase 
{
    public function testResult() 
    {
        $this->assertEquals(3, ShortestWord::findShort("bitcoin take over the world maybe who knows perhaps"));
        $this->assertEquals(3, ShortestWord::findShort("turns out random test cases are easier than writing out basic ones"));
    }
}


