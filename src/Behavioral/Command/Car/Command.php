<?php

declare(strict_types=1);

namespace App\Behavioral\Command\Car;

interface Command
{
    public function execute(): void;
}
