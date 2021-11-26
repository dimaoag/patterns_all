<?php

declare(strict_types=1);

namespace App\Structural\Composite\Car;

class Engine extends Equipment
{
    public function __construct()
    {
        parent::__construct('Engine', 350.34);
    }
}
