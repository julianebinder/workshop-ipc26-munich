<?php

declare(strict_types=1);

namespace KataTests;

use Kata\ChangeMe;
use Kata\GuessRandomNumber;
use Kata\GuessResult;
use Kata\NumberGenerator;
use PHPUnit\Framework\TestCase;

final class GuessRandomNumberTest extends TestCase
{
    public function testGuessRandomNumberTooHigh(): void
    {
        $generator = $this->createMock(NumberGenerator::class);

        $generator->method('generate')->willReturn(3);

        $guessRandomNumber = new GuessRandomNumber($generator);

        $isCorrect = $guessRandomNumber->guess(5);

        self::assertEquals(GuessResult::LOWER, $isCorrect);
    }

    public function testGuessRandomNumberCorrect(): void
    {
        $generator = $this->createMock(NumberGenerator::class);

        $generator->method('generate')->willReturn(3);

        $guessRandomNumber = new GuessRandomNumber($generator);

        $isCorrect = $guessRandomNumber->guess(3);

        self::assertEquals(GuessResult::HIT, $isCorrect);
    }

    public function testGuessRandomNumberTooLow(): void
    {
        $generator = $this->createMock(NumberGenerator::class);

        $generator->method('generate')->willReturn(7);

        $guessRandomNumber = new GuessRandomNumber($generator);

        $isCorrect = $guessRandomNumber->guess(5);

        self::assertEquals(GuessResult::HIGHER, $isCorrect);
    }
}
