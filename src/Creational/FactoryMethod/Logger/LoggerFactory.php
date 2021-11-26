<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Logger;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
