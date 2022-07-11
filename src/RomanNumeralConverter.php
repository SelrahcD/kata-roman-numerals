<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{

    public function toRomanNumerals(int $arabicNumber)
    {
        $result = '';

        if($arabicNumber >= 1000) {
            $result .= 'M';
            $arabicNumber = $arabicNumber - 1000;
        }

        if($arabicNumber >= 500) {
            $result .= 'D';
            $arabicNumber = $arabicNumber - 500;
        }

        if($arabicNumber >= 100) {
            $result .= 'C';
            $arabicNumber = $arabicNumber - 100;
        }

        if($arabicNumber >= 50) {
            $result .= 'L';
            $arabicNumber = $arabicNumber - 50;
        }

        if($arabicNumber >= 10) {
            $repetition = ($arabicNumber + 1) % 10;
            $toSubstract = $repetition * 10;
            $result .= 'X';
            $arabicNumber = $arabicNumber - 10;
        }

        if($arabicNumber >= 5) {
            $result .= 'V';
            $arabicNumber = $arabicNumber - 5;
        }

        $result .= str_repeat('I', $arabicNumber);
        return $result;
    }
}