<?php

namespace KataStringCalculator\Test;

use KataStringCalculator\StringCalculator;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function test_empty_string_should_be_zero()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(0, $calculator->Add(''));
    }

    public function test_single_number_should_return_same_number()
    {
        $calculator = new StringCalculator();

        $this->assertEquals(8, $calculator->Add('8'));
    }
}

