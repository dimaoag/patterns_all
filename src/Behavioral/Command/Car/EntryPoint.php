<?php

declare(strict_types=1);

namespace App\Behavioral\Command\Car;

class EntryPoint
{
    public function run(): void
    {
        $engine = new Engine();
        $driver = new Driver(new StartCommand($engine));
        $driver->execute();
        echo 'dr-dr-dr';
        $driver->setCommand(new StopCommand($engine));
        $driver->execute();
        echo 'stop dr-dr-dr';
    }
}
