<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Sedan;

use App\Creational\AbstractFactory\Cars\Car\EngineInterface;

class Engine implements EngineInterface
{
    public function maxSpeed(): float
    {
        return 250.00;
    }

    public function getConsumption(float $speed): float
    {
        return 0.9 * $speed;
    }
}
