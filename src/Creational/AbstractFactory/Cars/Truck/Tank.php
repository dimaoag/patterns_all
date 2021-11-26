<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Truck;

use App\Creational\AbstractFactory\Cars\Car\TankInterface;

class Tank implements TankInterface
{
    public function maxVolume(): float
    {
        return 500.00;
    }

    public function volume(): float
    {
        return 300.00;
    }

    public function isEmpty(): bool
    {
        return false;
    }

    public function speedFactory(): float
    {
        return 1.5;
    }

    public function spend(float $fuel): float
    {
        return 3 * $fuel;
    }
}
