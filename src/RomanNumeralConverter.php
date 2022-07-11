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

            if($arabicNumber >= 4 && $arabicNumber < 5) {
                $arabicNumber = $arabicNumber - 4;
                $result .= 'IV';
            }
            elseif ($arabicNumber >= 9 && $arabicNumber < 10) {
                $arabicNumber = $arabicNumber - 9;
                $result .= 'IX';
            }
            elseif ($arabicNumber >= 40 && $arabicNumber < 50) {
                $arabicNumber = $arabicNumber - 40;
                $result .= 'XL';
            }
            elseif ($arabicNumber >= 90 && $arabicNumber < 100) {
                $arabicNumber = $arabicNumber - 90;
                $result .= 'XC';
            }
            elseif ($arabicNumber >= 400 && $arabicNumber < 500) {
                $arabicNumber = $arabicNumber - 400;
                $result .= 'CD';
            }
            elseif ($arabicNumber >= 900 && $arabicNumber < 1000) {
                $arabicNumber = $arabicNumber - 900;
                $result .= 'CM';
            }
            
            $repetition = intdiv($arabicNumber, $arabic);
            $result .= str_repeat($numeral, $repetition);
            $arabicNumber = $arabicNumber - $arabic * $repetition;
        }
        
        return $result;
    }

    private function smallerDivision(int $currentDivision): int
    {
        foreach (self::ARABIC_TO_ROMAN as $arabic => $roman) {
            if($currentDivision === $arabic) {
                return $previousDivision;
            }

            $previousDivision = $arabic;
        }
    }
}