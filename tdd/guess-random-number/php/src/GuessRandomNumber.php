<?php

declare(strict_types=1);

namespace Kata;


final class GuessRandomNumber
{
    public int $generatedNumber;
    public int $counter = 0;

    public function __construct(public NumberGenerator $generator)
    {
        $this->generatedNumber = $this->generator->generate();
    }

    public function guess(int $number): GuessResult
    {
        $this->counter++;

        if ($this->counter > 3) {
            return GuessResult::TOO_MANY_TRIES;
        }
        if ($this->counter === 3) {
            if($number== $this->generatedNumber){
                return GuessResult::HIT;
            }
            return GuessResult::FAILED;
        }
        if ($number > $this->generatedNumber) {
            return GuessResult::LOWER;
        } else if ($number < $this->generatedNumber) {
            return GuessResult::HIGHER;
        } else {
            return GuessResult::HIT;
        }
    }
}
