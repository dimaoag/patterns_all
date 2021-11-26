<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Robot;

class EntryPoint
{
    public function run(): void
    {
        $pitchAngelSensor = new AngelSensor();
        $stabilizer = new BodyStabilizer();
        $movementRegulator = new MovementRegulator();
        $logger = new Logger();

        $controller = new Controller(
            $pitchAngelSensor,
            $stabilizer,
            $movementRegulator,
            $logger
        );

        $pitchAngelSensor->setMediator($controller);
        $stabilizer->setMediator($controller);
        $movementRegulator->setMediator($controller);
        $logger->setMediator($controller);

        $controller->goForward(5);
    }
}
