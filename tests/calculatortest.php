<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }

    public function testAdd(): void
    {
        $this->assertEquals(5, $this->calculator->add(2, 3));
        $this->assertEquals(0, $this->calculator->add(-1, 1));
        $this->assertEquals(3.5, $this->calculator->add(1.5, 2.0));
    }

    public function testSubtract(): void
    {
        $this->assertEquals(2, $this->calculator->subtract(5, 3));
        $this->assertEquals(-2, $this->calculator->subtract(3, 5));
    }

    public function testMultiply(): void
    {
        $this->assertEquals(15, $this->calculator->multiply(3, 5));
        $this->assertEquals(0, $this->calculator->multiply(0, 5));
    }

    public function testDivide(): void
    {
        $this->assertEquals(3, $this->calculator->divide(15, 5));
        $this->assertEquals(2.5, $this->calculator->divide(5, 2));
    }

    public function testDivideByZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->divide(10, 0);
    }
}
