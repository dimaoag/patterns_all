<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Robot;

class Logger implements Emitter
{
    private Mediator $mediator;

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }


    public function getMediator(): Mediator
    {
        return $this->mediator;
    }

    public function log(float $value): void
    {
        echo "Logger: I've written '$value' entry to the log.\n";
    }
}
