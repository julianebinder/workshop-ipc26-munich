<?php

namespace KataTests;

use Kata\GuessRandomNumberController;
use PHPUnit\Framework\TestCase;

class GuessRandomNumberControllerTest extends TestCase
{
    public function testRun()
    {
        $controller = new GuessRandomNumberController();
        $controller->start();

        self::assertEquals();
    }
}
