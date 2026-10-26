<?php

declare(strict_types=1);

namespace KataTests;

use Kata\ChangeMe;
use Kata\GuessRandomNumber;
use Kata\NumberGenerator;
use PHPUnit\Framework\TestCase;

final class GuessRandomNumberTest extends TestCase
{
    public function testGuessRandomNumberIncorrect(): void
    {
        $generator = $this->createMock(NumberGenerator::class);

        $generator->method('generate')->willReturn(3);

        $guessRandomNumber = new GuessRandomNumber($generator);

        $isCorrect = $guessRandomNumber->guess(5);
        self::assertFalse($isCorrect);
    }
}
