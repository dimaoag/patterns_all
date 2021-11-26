<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Robot;

class MovementRegulator implements Emitter
{
    private Mediator $mediator;
    private bool $isCancelled;

    public function __construct()
    {
        $this->isCancelled = false;
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }


    public function getMediator(): Mediator
    {
        return $this->mediator;
    }

    public function isCanceled(): bool
    {
        return  $this->isCancelled;
    }

    public function cancel(): void
    {
        $this->isCancelled = true;
    }

    public function executeStep(): void
    {
        if ($this->isCancelled) {
            return;
        }

        $this->mediator->notify($this, Events::STEP_EXECUTED);
    }
}
