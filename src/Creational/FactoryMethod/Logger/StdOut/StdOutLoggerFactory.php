<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Logger\StdOut;

use App\Creational\FactoryMethod\Logger\Logger;
use App\Creational\FactoryMethod\Logger\LoggerFactory;

class StdOutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
