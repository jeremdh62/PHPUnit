<?php

namespace App\Utils;

class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function sub(int $a, int $b): int
    {
        return $a - $b;
    }

    public function mul(int $a, int $b)
    {
        return $a * $b;
    }

    public function div(int $a, int $b)
    {
        return $a / $b;
    }

    public function avg(array $tab)
    {
        $total = 0;
        foreach ($tab as $val) {
            $total = $total + $val;
        }

        $result = $total / count($tab);

        return $result;
    }
}
