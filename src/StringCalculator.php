<?php

namespace KataStringCalculator;

class StringCalculator
{
    const DELIMITER = ',';

    public function Add(string $numbers): int
    {
        if ('' === $numbers) {
            return 0;
        }

        if (false === strpos($numbers, self::DELIMITER)) {
            return (int)$numbers;
        }

        return $numbers[0] + $numbers[2];
    }
}
