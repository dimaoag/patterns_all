<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Robot;

class BodyStabilizer implements Emitter
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

    public function stabilize(): void
    {
        echo 'Stabilizing body \n';
        $this->mediator->notify($this, Events::STABILIZATION_FINISHED);
    }
}
