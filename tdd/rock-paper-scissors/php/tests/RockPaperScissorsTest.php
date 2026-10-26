<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissors;
use Kata\RockPaperScissorsOptions;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsTest extends TestCase
{

    public function testRockBeatsScissors(): void
    {
        $changeMe = new RockPaperScissors();

        $winner = $changeMe->play(RockPaperScissorsOptions::ROCK, RockPaperScissorsOptions::SCISSORS);
        $winner2 = $changeMe->play(RockPaperScissorsOptions::SCISSORS, RockPaperScissorsOptions::ROCK);

        self::assertEquals(RockPaperScissorsOptions::ROCK, $winner);
        self::assertEquals(RockPaperScissorsOptions::ROCK, $winner2);
    }

    public function testPaperBeatsRock(): void
    {
        $changeMe = new RockPaperScissors();

        $winner = $changeMe->play(RockPaperScissorsOptions::PAPER, RockPaperScissorsOptions::ROCK);
        $winner2 = $changeMe->play(RockPaperScissorsOptions::ROCK, RockPaperScissorsOptions::PAPER);

        self::assertEquals(RockPaperScissorsOptions::PAPER, $winner);
        self::assertEquals(RockPaperScissorsOptions::PAPER, $winner2);
    }

    public function testScissorsBeatsPaper(): void
    {
        $changeMe = new RockPaperScissors();

        $winner = $changeMe->play(RockPaperScissorsOptions::SCISSORS, RockPaperScissorsOptions::PAPER);
        $winner2 = $changeMe->play(RockPaperScissorsOptions::PAPER, RockPaperScissorsOptions::SCISSORS);

        self::assertEquals(RockPaperScissorsOptions::SCISSORS, $winner);
        self::assertEquals(RockPaperScissorsOptions::SCISSORS, $winner2);
    }
}
