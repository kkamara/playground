<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\StrayNumber;

class StrayNumberTest extends TestCase 
{
    public function testStaticOperations()
    {
      $this->assertSame(2, StrayNumber::execute([1, 1, 2]));
      $this->assertSame(4, StrayNumber::execute([4, 2, 2, 2, 2]));
      $this->assertSame(5, StrayNumber::execute([4, 4, 4, 5, 4, 4, 4]));
    }
}
