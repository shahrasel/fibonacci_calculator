<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase {
    public function testFindNthNumber() {
        $fibonacci = new FibonacciClass();
        $this->assertEquals(12586269025, $fibonacci->getNumber(50));
    }
}