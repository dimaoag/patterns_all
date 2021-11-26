<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Robot;

use http\Exception\InvalidArgumentException;

class Controller implements Mediator
{
    private AngelSensor $pitchAngelSensor;
    private BodyStabilizer $stabilizer;
    private MovementRegulator $movementRegulator;
    private Logger $logger;

    public function __construct(
        AngelSensor $pitchAngelSensor,
        BodyStabilizer $stabilizer,
        MovementRegulator $movementRegulator,
        Logger $logger
    ) {
        $this->pitchAngelSensor = $pitchAngelSensor;
        $this->stabilizer = $stabilizer;
        $this->movementRegulator = $movementRegulator;
        $this->logger = $logger;
    }


    public function notify(Emitter $emitter, string $event): void
    {
        switch ($event) {
            case Events::STEP_EXECUTED:
                $this->pitchAngelSensor->change(mt_rand(0, 10));
                break;

            case Events::ANGEL_CHANGED:
                $pitchValue = $this->pitchAngelSensor->getValue();
                $this->logger->log($pitchValue);

                if ($pitchValue === 0) {
                    echo 'Stabilization is not needed.';
                    break;
                }

                $this->stabilizer->stabilize();
                break;

            case Events::STABILIZATION_FINISHED:
                break;

            default:
                throw new InvalidArgumentException('Event not supported.');
        }
    }

    public function goForward(int $step): void
    {
        $i = 1;

        while ($i <= $step && ! $this->movementRegulator->isCanceled()) {
            echo $i . ' step forward.';
            $this->movementRegulator->executeStep();
            $i++;
        }
    }
}
