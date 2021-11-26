<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Robot;

interface Emitter
{
    public function setMediator(Mediator $mediator): void;
    public function getMediator(): Mediator;
}
