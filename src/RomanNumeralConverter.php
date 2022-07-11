<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{
    const ARABIC_TO_ROMAN = [
        1000 => 'M',
    ];

    public function toRomanNumerals(int $arabicNumber)
    {
        $result = '';

        foreach (self::ARABIC_TO_ROMAN AS $arabic => $numeral) {
            
        }

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
            $repetition = intdiv($arabicNumber, 50);
            $result .= str_repeat('L', $repetition);
            $arabicNumber = $arabicNumber - 50 * $repetition;
        }

        if($arabicNumber >= 10) {
            $repetition = intdiv($arabicNumber, 10);
            $result .= str_repeat('X', $repetition);
            $arabicNumber = $arabicNumber - 10 * $repetition;
        }

        if($arabicNumber >= 5) {
            $repetition = intdiv($arabicNumber, 5);
            $result .= str_repeat('V', $repetition);
            $arabicNumber = $arabicNumber - 5 * $repetition;
        }

        if($arabicNumber >= 1) {
            $repetition = intdiv($arabicNumber, 1);
            $result .= str_repeat('I', $repetition);
            $arabicNumber = $arabicNumber - 1 * $repetition;
        }
        
        return $result;
    }
}