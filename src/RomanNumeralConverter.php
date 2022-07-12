<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{
    private const MAPPING = [
        5 => 'V',
        4 => 'IV',
    ];

    public function toRomanNumerals(int $arabicNumber): string
    {

        if($arabicNumber === 5) {
            return 'V';
        }

        $result = str_repeat('I', $arabicNumber);

        foreach (self::MAPPING as $repetition => $replacement) {
            $a = str_replace(str_repeat('I', $repetition), $replacement, $result);
            echo $a;
        }



        return str_replace(str_repeat('I', 4), 'IV', $result);
    }
}