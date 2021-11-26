<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Robot;

class AngelSensor implements Emitter
{
    private float $value;
    private Mediator $mediator;

    public function __construct()
    {
        $this->value = 0;
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }


    public function getMediator(): Mediator
    {
        return $this->mediator;
    }

    public function change(float $value): void
    {
        $this->value = $value;
        $this->mediator->notify($this, Events::ANGEL_CHANGED);
    }

    public function getValue(): float
    {
        return $this->value;
    }
}
