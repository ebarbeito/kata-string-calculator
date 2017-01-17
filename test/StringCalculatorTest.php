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
        $this->assertEquals(8, $this->calculator->Add(
          $this->formatNumbers(8)
        ));
    }

    public function test_two_numbers_should_return_their_sum()
    {
        $this->assertEquals(288, $this->calculator->Add(
          $this->formatNumbers(32, 256)
        ));
    }

    public function test_multiple_numbers_should_return_their_sum()
    {
        $this->assertEquals(30, $this->calculator->Add(
          $this->formatNumbers(0, 2, 4, 8, 16)
        ));
    }

    public function test_Add_method_should_have_commutative_property()
    {
        $eight = 8;
        $four = 4;

        $this->assertEquals(
          $this->calculator->Add($this->formatNumbers($eight, $four)),
          $this->calculator->Add($this->formatNumbers($eight, $four))
        );
    }

    /**
     * @param array ...$numbers
     *
     * @return string
     */
    private function formatNumbers(...$numbers): string
    {
        return implode(StringCalculator::DELIMITER, $numbers);
    }
}
