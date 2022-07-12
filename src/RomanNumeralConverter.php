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
        if($arabicNumber == 4) {
            return 'IV';
        }


        $allAs1 = str_repeat('I', $arabicNumber);

        return $allAs1;
    }
}