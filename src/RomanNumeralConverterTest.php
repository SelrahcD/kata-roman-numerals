<?php

declare(strict_types=1);

namespace RomanNumerals;

use PHPUnit\Framework\TestCase;

final class RomanNumeralConverterTest extends TestCase
{
    /**
     * @test
     * @dataProvider numbers
     */
    public function converts_from_arabic_numbers_to_roman_numeral(string $roman, int $arabicNumber): void
    {
        $this->assertEquals($roman, (new RomanNumeralConverter)->toRomanNumerals($arabicNumber));
    }

    public function numbers()
    {
        return [
            "I <=> 1" => ['I', 1],
            "II <=> 2" => ['II', 2],
            "III <=> 3" => ['III', 3],
            "V <=> 5" => ['V', 5],
            "VI <=> 6" => ['VI', 6],
            "VII <=> 7" => ['VII', 7],
            "X <=> 10" => ['X', 10],
            "XI <=> 11" => ['XI', 11],
            "XX <=> 20" => ['XX', 20],
            "XXI <=> 21" => ['XXI', 21],
            "XXVI <=> 26" => ['XXVI', 26],
            "XII <=> 12" => ['XII', 12],
            "XV <=> 15" => ['XV', 15],
            "XVI <=> 16" => ['XVI', 16],
            "L <=> 50" => ['L', 50],
            "LI <=> 51" => ['LI', 51],
            "LX <=> 60" => ['LX', 60],
            "LXX <=> 70" => ['LXX', 70],
            "C <=> 100" => ['C', 100],
            "CXV <=> 115" => ['CXV', 115],
            "D <=> 500" => ['D', 500],
            "DC <=> 600" => ['DC', 600],
            "M <=> 1000" => ['M', 1000],
        ];
    }
}
