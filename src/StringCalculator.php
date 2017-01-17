<?php

namespace KataStringCalculator;

class StringCalculator
{
    public function Add(string $numbers): int
    {
        if ('' === $numbers) {
            return 0;
        }

        if (false === strpos($numbers, ',')) {
            return (int)$numbers;
        }

        return $numbers[0] + $numbers[2];
    }
}
