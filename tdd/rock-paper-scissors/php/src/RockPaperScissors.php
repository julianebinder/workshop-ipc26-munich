<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissors
{

    private array $array = [RockPaperScissorsOptions::ROCK, RockPaperScissorsOptions::PAPER, RockPaperScissorsOptions::SCISSORS];


    public function play($player1, $player2): RockPaperScissorsOptions
    {
        if($player1 == RockPaperScissorsOptions::ROCK && $player2 == RockPaperScissorsOptions::SCISSORS){
            return RockPaperScissorsOptions::ROCK;
        }
        else if($player1 == RockPaperScissorsOptions::SCISSORS && $player2 == RockPaperScissorsOptions::ROCK){
            return RockPaperScissorsOptions::ROCK;
        }
        else if($player1 == RockPaperScissorsOptions::PAPER && $player2 == RockPaperScissorsOptions::ROCK){
            return RockPaperScissorsOptions::PAPER;
        }
        else if($player1 == RockPaperScissorsOptions::ROCK && $player2 == RockPaperScissorsOptions::PAPER){
            return RockPaperScissorsOptions::PAPER;
        }
        else if($player1 == RockPaperScissorsOptions::SCISSORS && $player2 == RockPaperScissorsOptions::PAPER){
            return RockPaperScissorsOptions::SCISSORS;
        }
        else if($player1 == RockPaperScissorsOptions::PAPER && $player2 == RockPaperScissorsOptions::SCISSORS){
            return RockPaperScissorsOptions::SCISSORS;
        }
        else {
            return RockPaperScissorsOptions::ROCK;
        }
    }
}
