<?php

use PHPUnit\Framework\TestCase;
use App\ComplimentaryDna;

class ComplimentaryDnaTest extends TestCase
{
    public function testResults()
    {
        $this->assertEquals("ATTGC", ComplimentaryDna::execute("TAACG"));
        $this->assertEquals("GTAT", ComplimentaryDna::execute("CATA"));
    }
}