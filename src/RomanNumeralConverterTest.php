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
    public function assert_numbers_are_converted(string $romanNumeral, int $arabicNumber): void
    {
        $this->assertEquals($romanNumeral, (new RomanNumeralConverter)->toRomanNumerals($arabicNumber));
    }

    public function numbers(): array
    {
        $data = [
            ['I', 1],
            ['II', 2],
            ['III', 3],
            ['IV', 4],
            ['V', 5],
            ['VI', 6],
            ['VIII', 8],
            ['IX', 9],
            ['X', 10],
            ['XV', 15],
            ['XX', 20],
            ['XL', 40],
            ['L', 50],
            ['LV', 55],
            ['LX', 60],
            ['XC', 90],
            ['C', 100],
            ['D', 500],
            ['M', 1000],
            ['MCMIII', 1903],
            ['MMM', 3000],
            ['MMMCM', 3900],
        ];

        return array_reduce($data, function (array $result, $datum) {
            [$romanNumeral, $arabicNumber] = $datum;
            $result[$romanNumeral . " <=> " . $arabicNumber] = $datum;

            return $result;
        }, []);
    }


}
