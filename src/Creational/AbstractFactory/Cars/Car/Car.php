<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars\Car;

class Car
{
    private BodyInterface $body;
    private EngineInterface $engine;
    private TankInterface $tank;

    public function __construct(CarFactoryInterface $abstractFactory)
    {
        $this->body = $abstractFactory->createBody();
        $this->engine = $abstractFactory->createEngine();
        $this->tank = $abstractFactory->createTank();
    }

    public function run(): void
    {
        $this->body->aerodynamic() * $this->engine->maxSpeed() * $this->tank->volume();
    }
}
