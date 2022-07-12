<?php

declare(strict_types=1);

namespace RomanNumerals;

use PHPUnit\Framework\TestCase;

final class RomanNumeralConverterTest extends TestCase
{

    /**
     * @test
     */
    public function convert_1_to_I(): void
    {
        $this->assertConversion('I', 1);
    }

    /**
     * @test
     */
    public function convert_2_to_II(): void
    {
        $this->assertConversion('II', 2);
    }

    /**
     * @test
     */
    public function convert_3_to_III(): void
    {
        $this->assertConversion('III', 3);
    }

    /**
     * @test
     */
    public function convert_4_to_IV(): void
    {
        $this->assertConversion('IV', 4);
    }

    /**
     * @test
     */
    public function convert_5_to_V(): void
    {
        $this->assertConversion('V', 5);
    }

    /**
     * @test
     */
    public function convert_6_to_VI(): void
    {
        $this->assertConversion('VI', 6);
    }


    /**
     * @test
     */
    public function convert_8_to_VIII(): void
    {
        $this->assertConversion('VIII', 8);
    }

    /**
     * @test
     */
    public function convert_9_to_IX(): void
    {
        $this->assertConversion('IX', 9);
    }

    /**
     * @param string $romanNumeral
     * @param int $arabicNumber
     * @return void
     */
    private function assertConversion(string $romanNumeral, int $arabicNumber): void
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
        ];

        return array_reduce($data, function (array $result, $datum) {
            [$romanNumeral, $arabicNumber] = $datum;
            $result[$romanNumeral . " <=> " . $arabicNumber] = $datum;
     }, []);
        
    }


}
