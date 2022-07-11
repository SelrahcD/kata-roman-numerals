<?php

declare(strict_types=1);

namespace RomanNumerals;

use PHPUnit\Framework\TestCase;

final class RomanNumeralConverterTest extends TestCase
{
    /**
    * @test
    */
    public function convert_1_to_I(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('I', 1);
    }

    /**
     * @test
     */
    public function convert_2_to_II(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('II', 2);
    }

    /**
     * @test
     */
    public function convert_3_to_III(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('III', 3);
    }

    /**
     * @test
     */
    public function convert_5_to_V(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('V', 5);
    }

    /**
     * @test
     */
    public function convert_6_to_VI(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('VI', 6);
    }

    /**
     * @test
     */
    public function convert_7_to_VII(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('VII', 7);
    }

    /**
     * @test
     */
    public function convert_10_to_X(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('X', 10);
    }

    /**
     * @test
     */
    public function convert_11_to_XI(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('XI', 11);
    }

    /**
     * @test
     */
    public function convert_20_to_XX(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('XX', 20);
    }

    /**
     * @test
     */
    public function convert_21_to_XXI(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('XXI', 21);
    }

    /**
     * @test
     */
    public function convert_26_to_XXVI(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('XXVI', 26);
    }

    /**
     * @test
     */
    public function convert_12_to_XII(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('XII', 12);
    }

    /**
     * @test
     */
    public function convert_15_to_XV(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('XV', 15);
    }

    /**
     * @test
     */
    public function convert_16_to_XVI(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('XVI', 16);
    }

    /**
     * @test
     */
    public function convert_50_to_L(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('L', 50);
    }

    /**
     * @test
     */
    public function convert_51_to_LI(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('LI', 51);
    }

    /**
     * @test
     */
    public function convert_60_to_LX(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('LX', 60);
    }

    /**
     * @test
     */
    public function convert_100_to_C(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('C', 100);
    }

    /**
     * @test
     */
    public function convert_115_to_C(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('CXV', 115);
    }

    /**
     * @test
     */
    public function convert_500_to_D(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('D', 500);
    }

    /**
     * @test
     */
    public function convert_600_to_D(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('DC', 600);
    }

    /**
     * @test
     */
    public function convert_1000_to_M(): void {
        $this->converts_from_arabic_numbers_to_roman_numeral('M', 1000);
    }

    /**
     * @test
     * @dataProvider numbers
     * @param string $roman
     * @param int $arabicNumber
     * @return void
     */
    public function converts_from_arabic_numbers_to_roman_numeral(string $roman, int $arabicNumber): void
    {
        $this->assertEquals($roman, (new RomanNumeralConverter)->toRomanNumerals($arabicNumber));
    }

    public function numbers()
    {
        return;
    }
}
