<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Bmw;

class EntryPoint
{
    public function run(): void
    {
        $factory = new BmwFactory();
        $x5 = $factory->create('X5');
        $x6 = $factory->create('X6');

        echo $x5->getMaxSpeed();
        echo $x6->getPrice();
    }
}
