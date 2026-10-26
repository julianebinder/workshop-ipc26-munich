<?php

namespace Kata;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:start-game')]
class GuessRandomNumberController
{

    public function __construct(public readonly GuessRandomNumber $guessRandomNumber)
    {

    }

    public function __invoke(InputInterface $input, OutputInterface $output): int
    {
        $helper = new QuestionHelper();
        $question = new Question('Please enter a number between 1 and 10: ');

        $number = $helper->ask($input, $output, $question);
        if (!$number) {
             $this->guessRandomNumber->guess($number);
        }
    }

}
