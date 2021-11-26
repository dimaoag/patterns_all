<?php

declare(strict_types=1);

namespace App\Behavioral\Command\Hello;

interface CanceledCommand extends Command
{
    /**
     * This method is used to undo change made by command execution
     */
    public function cancel(): void;
}
