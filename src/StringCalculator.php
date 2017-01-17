<?php

namespace KataStringCalculator;

class StringCalculator
{
    public function Add(string $numbers): int
    {
        if ('' === $numbers) {
            return 0;
        }

        return (int)$numbers;
    }
}
