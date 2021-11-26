<?php

declare(strict_types=1);

namespace App\Structural\Composite\Car;

class Wheels extends Equipment
{
    public function __construct()
    {
        parent::__construct('Wheels', 534.87);
    }
}
