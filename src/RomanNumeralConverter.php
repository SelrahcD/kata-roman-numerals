<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{
    private const MAPPING = [
        500 => 'D',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
    ];

    public function toRomanNumerals(int $arabicNumber): string
    {
        $result = str_repeat('I', $arabicNumber);

        foreach (self::MAPPING as $repetition => $replacement) {
            $result = str_replace(str_repeat('I', $repetition), $replacement, $result);
        }

        return $result;
    }
}