<?php

namespace KataStringCalculator\Test;

use KataStringCalculator\StringCalculator;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    /** @var StringCalculator */
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new StringCalculator();
    }

    public function test_empty_number_should_return_zero()
    {
        $this->assertEquals(0, $this->calculator->Add(''));
    }

    public function test_single_number_should_return_same_number()
    {
        $this->assertEquals(8, $this->calculator->Add('8'));
    }
}

