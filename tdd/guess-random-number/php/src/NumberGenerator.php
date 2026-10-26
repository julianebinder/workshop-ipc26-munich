<?php

namespace Kata;

use Kata\NumberGeneratorInterface;

class NumberGenerator implements NumberGeneratorInterface
{

    public function generate($min, $max): int
    {
        return rand($min, $max);
    }
}
