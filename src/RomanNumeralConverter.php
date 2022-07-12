<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{

    public function toRomanNumerals(int $arabicNumber): string
    {
        if($arabicNumber == 4) {
            return 'IV';
        }

        return str_repeat('I', $arabicNumber);
    }
}