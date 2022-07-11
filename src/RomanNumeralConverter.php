<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{

    public function toRomanNumerals(int $arabicNumber)
    {
        if($arabicNumber == 100) {
            return 'C';
        }

        if($arabicNumber == 50) {
            return 'L';
        }

        if($arabicNumber == 10) {
            return 'X';
        }

        if($arabicNumber == 5) {
            return 'V';
        }

        return str_repeat('I', $arabicNumber);
    }
}