<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Car;

interface TankInterface
{
    public function maxVolume(): float;
    public function volume(): float;
    public function isEmpty(): bool;
    public function speedFactory(): float;
    public function spend(float $fuel): float;
}
