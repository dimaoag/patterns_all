<?php

declare(strict_types=1);

namespace App\Creational\Singleton;

class EntryPoint
{
    public function run(): void
    {
        $obj = Singleton::getInstance();
    }
}
