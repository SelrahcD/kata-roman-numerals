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
    public function converts_from_arabic_numbers_to_roman_numerals(int $arabic, string $roman): void {
        $this->assertEquals($roman, (new RomanNumeralConverter)->toRomanNumerals($arabic));
    }

    /**
    * @test
    */
    public function convert_1_to_I(): void {
        $this->assertEquals('I', (new RomanNumeralConverter)->toRomanNumerals(1));
    }

    /**
     * @test
     */
    public function convert_2_to_II(): void {
        $this->assertEquals('II', (new RomanNumeralConverter)->toRomanNumerals(2));
    }

    /**
     * @test
     */
    public function convert_3_to_III(): void {
        $this->assertEquals('III', (new RomanNumeralConverter)->toRomanNumerals(3));
    }

    /**
     * @test
     */
    public function convert_5_to_V(): void {
        $this->assertEquals('V', (new RomanNumeralConverter)->toRomanNumerals(5));
    }

    /**
     * @test
     */
    public function convert_6_to_VI(): void {
        $this->assertEquals('VI', (new RomanNumeralConverter)->toRomanNumerals(6));
    }

    /**
     * @test
     */
    public function convert_7_to_VII(): void {
        $this->assertEquals('VII', (new RomanNumeralConverter)->toRomanNumerals(7));
    }

    /**
     * @test
     */
    public function convert_10_to_X(): void {
        $this->assertEquals('X', (new RomanNumeralConverter)->toRomanNumerals(10));
    }

    /**
     * @test
     */
    public function convert_11_to_XI(): void {
        $this->assertEquals('XI', (new RomanNumeralConverter)->toRomanNumerals(11));
    }

    /**
     * @test
     */
    public function convert_20_to_XX(): void {
        $this->assertEquals('XX', (new RomanNumeralConverter)->toRomanNumerals(20));
    }

    /**
     * @test
     */
    public function convert_21_to_XXI(): void {
        $this->assertEquals('XXI', (new RomanNumeralConverter)->toRomanNumerals(21));
    }

    /**
     * @test
     */
    public function convert_26_to_XXVI(): void {
        $this->assertEquals('XXVI', (new RomanNumeralConverter)->toRomanNumerals(26));
    }

    /**
     * @test
     */
    public function convert_12_to_XII(): void {
        $this->assertEquals('XII', (new RomanNumeralConverter)->toRomanNumerals(12));
    }

    /**
     * @test
     */
    public function convert_15_to_XV(): void {
        $this->assertEquals('XV', (new RomanNumeralConverter)->toRomanNumerals(15));
    }

    /**
     * @test
     */
    public function convert_16_to_XVI(): void {
        $this->assertEquals('XVI', (new RomanNumeralConverter)->toRomanNumerals(16));
    }

    /**
     * @test
     */
    public function convert_50_to_L(): void {
        $this->assertEquals('L', (new RomanNumeralConverter)->toRomanNumerals(50));
    }

    /**
     * @test
     */
    public function convert_51_to_LI(): void {
        $this->assertEquals('LI', (new RomanNumeralConverter)->toRomanNumerals(51));
    }

    /**
     * @test
     */
    public function convert_60_to_LX(): void {
        $this->assertEquals('LX', (new RomanNumeralConverter)->toRomanNumerals(60));
    }

    /**
     * @test
     */
    public function convert_100_to_C(): void {
        $this->assertEquals('C', (new RomanNumeralConverter)->toRomanNumerals(100));
    }

    /**
     * @test
     */
    public function convert_115_to_C(): void {
        $this->assertEquals('CXV', (new RomanNumeralConverter)->toRomanNumerals(115));
    }

    /**
     * @test
     */
    public function convert_500_to_D(): void {
        $this->assertEquals('D', (new RomanNumeralConverter)->toRomanNumerals(500));
    }

    /**
     * @test
     */
    public function convert_600_to_D(): void {
        $this->assertEquals('DC', (new RomanNumeralConverter)->toRomanNumerals(600));
    }

    /**
     * @test
     */
    public function convert_1000_to_M(): void {
        $this->assertEquals('M', (new RomanNumeralConverter)->toRomanNumerals(1000));
    }

    public function numbers()
    {
        return [
            '1 <=> I' => [1, 'I'],
        ];
    }

}
