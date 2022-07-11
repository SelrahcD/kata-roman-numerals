<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{

    public function toRomanNumerals(int $arabicNumber)
    {
        $result = '';

        if($arabicNumber >= 1000) {
            $repetition = intdiv($arabicNumber, 1000);
            $result .= str_repeat('M', $repetition);
            $arabicNumber = $arabicNumber - 1000 * $repetition;
        }

        if($arabicNumber >= 500) {
            $repetition = intdiv($arabicNumber, 500);
            $result .= str_repeat('D', $repetition);
            $arabicNumber = $arabicNumber - 500 * $repetition;
        }

        if($arabicNumber >= 100) {
            $repetition = intdiv($arabicNumber, 100);
            $result .= str_repeat('C', $repetition);
            $arabicNumber = $arabicNumber - 100 * $repetition;
        }

        if($arabicNumber >= 50) {
            $result .= 'L';
            $arabicNumber = $arabicNumber - 50;
        }

        if($arabicNumber >= 10) {
            $repetition = intdiv($arabicNumber, 10);
            $result .= str_repeat('X', $repetition);
            $arabicNumber = $arabicNumber - 10 * $repetition;
        }

        if($arabicNumber >= 5) {
            $result .= 'V';
            $arabicNumber = $arabicNumber - 5;
        }

        $result .= str_repeat('I', $arabicNumber);
        return $result;
    }
}