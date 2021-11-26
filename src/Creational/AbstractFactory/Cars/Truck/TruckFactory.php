<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Truck;

use App\Creational\AbstractFactory\Cars\Car\BodyInterface;
use App\Creational\AbstractFactory\Cars\Car\CarFactoryInterface;
use App\Creational\AbstractFactory\Cars\Car\EngineInterface;
use App\Creational\AbstractFactory\Cars\Car\TankInterface;

class TruckFactory implements CarFactoryInterface
{
    public function createBody(): BodyInterface
    {
        return new Body();
    }

    public function createEngine(): EngineInterface
    {
        return new Engine();
    }

    public function createTank(): TankInterface
    {
        return new Tank();
    }
}
