<?php

declare(strict_types=1);

namespace KataTests;

use Kata\ChangeMe;
use Kata\GuessRandomNumber;
use Kata\GuessResult;
use Kata\NumberGenerator;
use Kata\NumberGeneratorInterface;
use PHPUnit\Framework\TestCase;

final class GuessRandomNumberTest extends TestCase
{
    public function testGuessRandomNumberTooHigh(): void
    {
        $generator = $this->createMock(NumberGeneratorInterface::class);

        $generator->method('generate')->willReturn(3);

        $guessRandomNumber = new GuessRandomNumber($generator);

        $isCorrect = $guessRandomNumber->guess(5);

        self::assertEquals(GuessResult::LOWER, $isCorrect);
    }

    public function testGuessRandomNumberCorrect(): void
    {
        $generator = $this->createMock(NumberGeneratorInterface::class);

        $generator->method('generate')->willReturn(3);

        $guessRandomNumber = new GuessRandomNumber($generator);

        $isCorrect = $guessRandomNumber->guess(3);

        self::assertEquals(GuessResult::HIT, $isCorrect);
    }

    public function testGuessRandomNumberTooLow(): void
    {
        $generator = $this->createMock(NumberGeneratorInterface::class);

        $generator->method('generate')->willReturn(7);

        $guessRandomNumber = new GuessRandomNumber($generator);

        $isCorrect = $guessRandomNumber->guess(5);

        self::assertEquals(GuessResult::HIGHER, $isCorrect);
    }

    public function testMaxRounds()
    {
        $generator = $this->createMock(NumberGeneratorInterface::class);
        $generator->method('generate')->willReturn(1);
        $guessRandomNumber = new GuessRandomNumber($generator);
        $result1 = $guessRandomNumber->guess(9);
        $result2 = $guessRandomNumber->guess(8);
        $result3 = $guessRandomNumber->guess(7);
        self::assertEquals(GuessResult::LOWER, $result1);
        self::assertEquals(GuessResult::LOWER, $result2);
        self::assertEquals(GuessResult::FAILED, $result3);
    }

    public function testMaxRoundsWin()
    {
        $generator = $this->createMock(NumberGeneratorInterface::class);
        $generator->method('generate')->willReturn(1);
        $guessRandomNumber = new GuessRandomNumber($generator);
        $result1 = $guessRandomNumber->guess(9);
        $result2 = $guessRandomNumber->guess(8);
        $result3 = $guessRandomNumber->guess(1);
        self::assertEquals(GuessResult::LOWER, $result1);
        self::assertEquals(GuessResult::LOWER, $result2);
        self::assertEquals(GuessResult::HIT, $result3);
    }

    public function testMaxRoundsTooManyTries()
    {
        $generator = $this->createMock(NumberGeneratorInterface::class);
        $generator->method('generate')->willReturn(1);
        $guessRandomNumber = new GuessRandomNumber($generator);
        $result1 = $guessRandomNumber->guess(9);
        $result2 = $guessRandomNumber->guess(8);
        $result3 = $guessRandomNumber->guess(7);
        $result4 = $guessRandomNumber->guess(6);
        self::assertEquals(GuessResult::LOWER, $result1);
        self::assertEquals(GuessResult::LOWER, $result2);
        self::assertEquals(GuessResult::FAILED, $result3);
        self::assertEquals(GuessResult::TOO_MANY_TRIES, $result4);
    }

    public function testGenerator_isNumber()
    {
        $generator = new NumberGenerator();
        $number = $generator->generate(1, 10);

        self::assertIsNumeric($number);
    }
}
