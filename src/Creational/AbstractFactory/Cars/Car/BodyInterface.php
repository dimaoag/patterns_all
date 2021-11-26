<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Car;

interface BodyInterface
{
    public function aerodynamic(): float;
    public function maxWeight(): float;
}
