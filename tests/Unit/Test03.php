<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Test03 extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_that_StringEndsWith(): void
    {
        $this->assertStringEndsWith('lo', 'tijolo');
    }
}
