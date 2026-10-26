<?php

namespace Kata;

use Kata\NumberGeneratorInterface;

class NumberGenerator implements NumberGeneratorInterface
{

    public function generate(): int
    {
        return rand(1,10);
    }
}
