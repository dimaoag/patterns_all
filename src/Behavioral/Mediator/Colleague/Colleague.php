<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Colleague;

abstract class Colleague
{
    protected Mediator $mediator;

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}
