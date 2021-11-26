<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Car;

interface CarFactoryInterface //Abstract factory
{
    public function createBody(): BodyInterface;
    public function createEngine(): EngineInterface;
    public function createTank(): TankInterface;
}
