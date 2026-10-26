<?php

declare(strict_types=1);

namespace Kata;

final class GuessRandomNumber
{

    public function __construct(public NumberGenerator $generator)
    {

    }
    public function guess(int $number): bool
    {
        return false;
    }
}
