<?php

declare(strict_types=1);

namespace App\Structural\Composite\Car;

class EntryPoint
{
    public function run(): void
    {
        $body = new Body();
        $body->add(new Interior());
        $body->add(new Exterior());

        $car = new Car();
        $car->add(new Engine());
        $car->add(new Wheels());
        $car->add($body);

        echo $car->getPrice();
    }
}
