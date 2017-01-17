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

    public function test_two_numbers_shoud_return_their_sum()
    {
        $this->assertEquals(12, $this->calculator->Add('8,4'));
    }

    public function test_Add_method_should_have_commutative_property()
    {
        $eight = 8;
        $four = 4;

        $this->assertEquals(
          $this->calculator->Add(sprintf('%d%s%d', $eight, StringCalculator::DELIMITER, $four)),
          $this->calculator->Add(sprintf('%d%s%d', $four, StringCalculator::DELIMITER, $eight))
        );
    }
}
