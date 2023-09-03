<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Test02 extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_that_NotContains(): void
    {
        $this->assertNotContains(7, [1, 2, 3]);
    }
}
