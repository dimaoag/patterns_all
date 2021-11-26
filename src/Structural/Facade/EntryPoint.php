<?php

declare(strict_types=1);

namespace App\Structural\Facade;

class EntryPoint
{
    public function run(): void
    {
        $linux = new OperatingSystem('Linux');
        $bios = new Bios();

        $facade = new Facade($bios, $linux);
        $facade->turnOn();
        $facade->turnOff();
    }
}
