<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{

    public function toRomanNumerals(int $arabicNumber)
    {

        if($arabicNumber == 5) {
            return 'V';
        }

        return str_repeat('I', $arabicNumber);
        if($arabicNumber == 3) {
            return 'III';
        }

        if($arabicNumber == 2) {
            return 'II';
        }

        return 'I';
    }
}