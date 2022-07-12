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
    public function convert_4_to_IV(): void {
        $this->assertEquals('IV', (new RomanNumeralConverter)->toRomanNumerals(4));
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
    public function convert_8_to_VIII(): void {
        $this->assertEquals('VIII', (new RomanNumeralConverter)->toRomanNumerals(8));
    }

    /**
     * @test
     */
    public function convert_9_to_IX(): void {
        $this->assertEquals('IX', (new RomanNumeralConverter)->toRomanNumerals(9));
    }


}
