<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Colleague;

interface Mediator
{
    public function getUser(string $username): string;
}
