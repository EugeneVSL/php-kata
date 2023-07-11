<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{

    /**
     * @test
     * @dataProvider factors 
     */
    function generates_prime_factors_for_1($number, $expected)
    {

        $factors = new PrimeFactors;

        $this->assertEquals($expected, $factors->generate($number));
    }

    public static function factors()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
        ];
    } 
}