<?php

declare(strict_types=1);

namespace App\Behavioral\Command\Car;

class Driver
{
    private Command $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    public function execute(): void
    {
        $this->command->execute();
    }
}
