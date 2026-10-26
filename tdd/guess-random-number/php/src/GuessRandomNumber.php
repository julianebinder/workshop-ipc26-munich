<?php

declare(strict_types=1);

namespace Kata;


final class GuessRandomNumber
{
    public int $generatedNumber;

    public function __construct(public NumberGenerator $generator)
    {
        $this->generatedNumber = $this->generator->generate();
    }
    public function guess(int $number): GuessResult
    {
        if ($number > $this->generatedNumber) {
            return GuessResult::LOWER;
        } else if ($number < $this->generatedNumber) {
            return GuessResult::HIGHER;
        } else {
            return GuessResult::HIT;
        }
    }
}
