<?php

declare(strict_types=1);

namespace App\Behavioral\Command\Hello;

/**
 * Invoker is using the command given to it.
 * Example : an Application in SF2.
 */
class Invoker
{
    private Command $command;

    /**
     * in the invoker we find this kind of method for subscribing the command
     * There can be also a stack, a list, a fixed set ...
     * @param Command $cmd
     */
    public function setCommand(Command $cmd): void
    {
        $this->command = $cmd;
    }

    /**
     * executes the command; the invoker is the same whatever is the command
     */
    public function run(): void
    {
        $this->command->execute();
    }
}
