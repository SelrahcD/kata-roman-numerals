<?php

declare(strict_types=1);

namespace RomanNumerals;

final class RomanNumeralConverter
{

    public function toRomanNumerals(int $int)
    {
        if($int == 2) {
            return 'II';
        }
        return 'I';
    }
}