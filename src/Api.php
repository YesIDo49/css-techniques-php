<?php

declare(strict_types=1);

namespace Mehdi\CssTechniquesPhp;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0, 100);
    }
}