<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{
    const ARABIC_TO_ROMAN = [
        1000 => 'M',
        500 => 'D',
        100 => 'C',
        50 => 'L',
        10 => 'X',
        5 => 'V',
        1 => 'I',
    ];

    public function toRomanNumerals(int $arabicNumber)
    {
        if($arabicNumber === 4) {
            return 'IV';
        }
        elseif ($arabicNumber === 9) {
            return 'IX';
        }
        elseif ($arabicNumber === 40) {
            return 'XL';
        }
        elseif ($arabicNumber === 90) {
            return 'XC';
        }
        
        $result = '';

        foreach (self::ARABIC_TO_ROMAN AS $arabic => $numeral) {
            $repetition = intdiv($arabicNumber, $arabic);
            $result .= str_repeat($numeral, $repetition);
            $arabicNumber = $arabicNumber - $arabic * $repetition;
        }
        
        return $result;
    }
}