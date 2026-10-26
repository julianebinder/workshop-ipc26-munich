<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissors
{

    private array $array = ['rock', 'paper', 'scissors'];

    public function play($player1, $player2): string
    {
        if($player1 == "rock" && $player2 == "scissors"){
            return 'rock';
        } else if($player1 == "scissors" && $player2 == "rock"){
            return 'rock';
        }

    }
}
