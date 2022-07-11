<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{

    public function toRomanNumerals(int $arabicNumber)
    {
        $result = '';
        
        if($arabicNumber == 1000) {
            return 'M';
        }

        if($arabicNumber == 500) {
            return 'D';
        }

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

        if($arabicNumber == 6) {
            return 'VI';
        }

        return str_repeat('I', $arabicNumber);
    }
}