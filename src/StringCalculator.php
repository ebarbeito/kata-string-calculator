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

        return array_sum(
          explode(self::DELIMITER, $numbers)
        );
    }
}
