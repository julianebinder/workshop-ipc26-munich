<?php

namespace Kata;

enum GuessResult
{
    case HIGHER;
    case LOWER;
    case HIT;
    case FAILED;
    case TOO_MANY_TRIES;
}
