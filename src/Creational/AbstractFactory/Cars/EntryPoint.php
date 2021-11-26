<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Cars;

use App\Creational\AbstractFactory\Cars\Car\Car;
use App\Creational\AbstractFactory\Cars\Sedan\SedanFactory;
use App\Creational\AbstractFactory\Cars\Truck\TruckFactory;

class EntryPoint
{
    public function run(): void
    {
        $sedan = new Car(new SedanFactory());
        $sedan->run();

        $truck = new Car(new TruckFactory());
        $truck->run();
    }
}
