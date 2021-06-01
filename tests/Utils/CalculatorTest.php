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

        $result = $calculator->add(4,8);

        //assertEquals permet de comparer 2 valeurs
        //$this->assertEquals(12,$result);

        /*assertSame permet de comparer 2 valeurs mais aussi 
        de voir si le type est le même */
        $this->assertSame(12,$result);
        //$this->assertSame(12,"12");
    }

    /** @test */
    public function can_substract_two_integers() {
        $calculator = new Calculator();

        $result = $calculator->sub(4,8);

        $this->assertSame(-4,$result);
    }
}