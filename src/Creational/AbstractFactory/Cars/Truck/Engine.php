<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Truck;

use App\Creational\AbstractFactory\Cars\Car\EngineInterface;

class Engine implements EngineInterface
{
    public function maxSpeed(): float
    {
        return 150.00;
    }

    public function getConsumption(float $speed): float
    {
        return 0.5 * $speed;
    }
}
