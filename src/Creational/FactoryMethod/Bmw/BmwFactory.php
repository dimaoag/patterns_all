<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Bmw;

use http\Exception\InvalidArgumentException;

class BmwFactory
{
    public function create(string $type): Bmw
    {
        if ($type === 'X5') {
            return new Bmw($type, 20000.45, 250);
        }

        if ($type === 'X6') {
            return new Bmw($type, 20000.45, 250);
        }

        throw new InvalidArgumentException('Type not supported!');
    }
}
