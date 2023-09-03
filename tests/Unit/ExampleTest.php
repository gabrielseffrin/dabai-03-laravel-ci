<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_that_Equals(): void
    {
        $this->assertEquals('carro', 'carro');
    }

    public function test_that_NotContains(): void
    {
        $this->assertNotContains(7, [1, 2, 3]);
    }

    public function test_that_StringEndsWith(): void
    {
        $this->assertStringEndsWith('lo', 'tijolo');
    }
}
