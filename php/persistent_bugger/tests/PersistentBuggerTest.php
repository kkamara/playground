<?php

use PHPUnit\Framework\TestCase;
use App\PersistentBugger;

class PersistentBuggerTest extends TestCase
{
    public function testResults()
    {
        $this->assertEquals(3, PersistentBugger::execute(39));
        $this->assertEquals(4, PersistentBugger::execute(999));
        $this->assertEquals(0, PersistentBugger::execute(4));
    }
}
