<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Car;

interface EngineInterface
{
    public function maxSpeed(): float;
    public function getConsumption(float $speed): float;
}
