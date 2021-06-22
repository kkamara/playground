<?php

use PHPUnit\Framework\TestCase;
use App\WhoLikesIt;

class WhoLikesItTest extends TestCase
{
    public function testWhoLikesIt()
    {
        $this->assertEquals("no one likes this", WhoLikesIt::execute([]));
        $this->assertEquals("Jacob and Alex like this", WhoLikesIt::execute(["Jacob", "Alex"]));
        $this->assertEquals("Max, John and Mark like this", WhoLikesIt::execute(["Max", "John", "Mark"]));
        $this->assertEquals("Alex, Jacob and 2 others like this", WhoLikesIt::execute(["Alex", "Jacob", "Mark", "Max"]));
    }
}