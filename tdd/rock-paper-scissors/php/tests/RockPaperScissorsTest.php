<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissors;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsTest extends TestCase
{

    public function testRockBeatsScissors(): void
    {
        $changeMe = new RockPaperScissors();

        $winner = $changeMe->play('rock', 'scissors');
        $winner2 = $changeMe->play('scissors', 'rock');

        self::assertEquals('rock', $winner);
        self::assertEquals('rock', $winner2);
    }
}
