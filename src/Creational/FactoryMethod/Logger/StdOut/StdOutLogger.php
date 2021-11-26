<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Logger\StdOut;

use App\Creational\FactoryMethod\Logger\Logger;

class StdOutLogger implements Logger
{
    public function log(string $message): void
    {
        echo $message;
    }
}
