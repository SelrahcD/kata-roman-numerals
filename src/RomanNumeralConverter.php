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
        $result = '';

        foreach (self::ARABIC_TO_ROMAN AS $arabic => $numeral) {
            
            if($arabicNumber < 5 && $arabicNumber / 1 > 3) {
                return 'IV';
            }
            elseif ($arabicNumber > 5 && $arabicNumber <= 10 && fmod($arabicNumber, 5) == 4) {
                echo fmod($arabicNumber, 5);
                echo $arabicNumber % 5;
                return 'IX';
            }
            elseif ($arabicNumber === 40) {
                return 'XL';
            }
            elseif ($arabicNumber === 90) {
                return 'XC';
            }
            elseif ($arabicNumber === 400) {
                return 'CD';
            }
            elseif ($arabicNumber === 900) {
                return 'CM';
            }
            
            $repetition = intdiv($arabicNumber, $arabic);
            $result .= str_repeat($numeral, $repetition);
            $arabicNumber = $arabicNumber - $arabic * $repetition;
        }
        
        return $result;
    }
}