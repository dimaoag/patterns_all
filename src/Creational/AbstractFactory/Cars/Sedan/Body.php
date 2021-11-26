<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Sedan;

use App\Creational\AbstractFactory\Cars\Car\BodyInterface;

class Body implements BodyInterface
{

    public function aerodynamic(): float
    {
        return 1.345;
    }

    public function maxWeight(): float
    {
        return 5.33;
    }
}
