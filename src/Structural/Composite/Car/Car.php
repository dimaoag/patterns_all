<?php

declare(strict_types=1);

namespace App\Structural\Composite\Car;

class Car extends Composite
{
    public function __construct()
    {
        parent::__construct('Car');
    }
}
