<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Formatters\Abstraction;

class HelloWorldService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('Hello World');
    }
}
