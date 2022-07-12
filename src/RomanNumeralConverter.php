<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{
    private const MAPPING = [
        4 => 'IV'
    ];

    public function toRomanNumerals(int $arabicNumber): string
    {

        $allAs1 = str_repeat('I', $arabicNumber);

        return str_replace(str_repeat('I', 4), 'IV', $allAs1);

        return $allAs1;
    }
}