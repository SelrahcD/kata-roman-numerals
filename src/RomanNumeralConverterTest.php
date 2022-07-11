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
}
