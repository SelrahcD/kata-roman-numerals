<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{

    public function toRomanNumerals(int $arabicNumber)
    {
        $result = '';

        if($arabicNumber == 1000) {
            $result .= 'M';
            return $result;
        }

        if($arabicNumber == 500) {
            $result .= 'D';
            return $result;
        }

        if($arabicNumber == 100) {
            $result .= 'C';
            return $result;
        }

        if($arabicNumber == 50) {
            $result .= 'L';
            return $result;
        }

        if($arabicNumber == 10) {
            $result .= 'X';
            return $result;
        }

        if($arabicNumber >= 5) {
            $result .= 'V';
            $arabicNumber = $arabicNumber - 5;
        }
        

        $result .= str_repeat('I', $arabicNumber);
        return $result;
    }
}