<?php

use PHPUnit\Framework\TestCase;
use App\IfYouCanReadThis;

class IfYouCanReadThisTest extends TestCase
{
    public function testIfYouCanReadThisTest()
    {
        $this->assertEquals(
            "India Foxtrot Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta",
            IfYouCanReadThis::execute('If you can read')
        );
        $this->assertEquals(
            "Delta India Delta November Oscar Tango Sierra Echo Echo Tango Hotel Alfa Tango Charlie Oscar Mike India November Golf", 
            IfYouCanReadThis::execute('Did not see that coming')
        );
        $this->assertEquals(
            "Golf Oscar Foxtrot Oscar Romeo India Tango !", 
            IfYouCanReadThis::execute("go for it!")
        );
    }
}