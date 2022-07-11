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
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public function toRomanNumerals(int $arabicNumber)
    {
        $result = '';

        foreach (self::ARABIC_TO_ROMAN AS $arabic => $numeral) {


            if ($arabicNumber >= 90 && $arabicNumber < 100) { // 100 10 -> 100 % 90 -> 10 && 100 - 90 = 10
                $arabicNumber = $arabicNumber - 90;
                $result .= 'XC';
            }
            if ($arabicNumber >= 400 && $arabicNumber < 500) { // 500 100 -> 500 % 400 -> 100 && 500 - 400 = 100
                $arabicNumber = $arabicNumber - 400;
                $result .= 'CD';
            }
            elseif ($arabicNumber >= 900 && $arabicNumber < 1000) { // 1000 100 -> 1000 % 900 -> 100 && 1000 - 900 = 100
                $arabicNumber = $arabicNumber - 900;
                $result .= 'CM';
            }
            
            $repetition = intdiv($arabicNumber, $arabic);
            $result .= str_repeat($numeral, $repetition);
            $arabicNumber = $arabicNumber - $arabic * $repetition;
        }
        
        return $result;
    }
}