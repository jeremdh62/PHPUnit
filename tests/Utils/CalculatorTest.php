<?php

namespace App\Tests\Utils;

use App\Utils\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    /** @test */
    public function can_add_two_integers()
    {
        $calculator = new Calculator();

        $result = $calculator->add(4, 8);

        //assertEquals permet de comparer 2 valeurs
        //$this->assertEquals(12,$result);

        /*assertSame permet de comparer 2 valeurs mais aussi 
        de voir si le type est le même */
        $this->assertSame(12, $result);
        //$this->assertSame(12,"12");
    }

    /** @test */
    public function can_substract_two_integers()
    {
        $calculator = new Calculator();

        $result = $calculator->sub(4, 8);

        $this->assertSame(-4, $result);
    }

    /** @test */
    public function can_multiply_two_integers()
    {
        $calculator = new Calculator();

        $result = $calculator->mul(2, 4);

        $this->assertSame(8, $result);
    }

    /** @test */
    public function can_divise_two_integers()
    {
        $calculator = new Calculator();

        $result = $calculator->div(4, 2);

        $this->assertSame(2, $result);
    }

    /** @test */
    public function can_divise_zero_two_integers()
    {
        $calculator = new Calculator();

        $result = $calculator->div(4, 0);

        $this->assertNull($result);
    }

    /** @test */
    public function can_avg_two_integers()
    {
        $calculator = new Calculator();

        $result = $calculator->avg(["1", 2, 3, 4, 5, 6, 7, 8, 9]);

        $this->assertSame(5, $result);
    }
}
