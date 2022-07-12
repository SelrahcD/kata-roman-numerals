<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{
    private const MAPPING = [
        4 => 'IV',
        5 => 'V',
    ];

    public function toRomanNumerals(int $arabicNumber): string
    {

        if($arabicNumber === 5) {
            return 'V';
        }

        $allAs1 = str_repeat('I', $arabicNumber);

        foreach (self::MAPPING as $repetition => $replacement) {}



        return str_replace(str_repeat('I', 4), 'IV', $allAs1);
    }
}