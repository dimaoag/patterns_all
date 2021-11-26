<?php

declare(strict_types=1);

namespace App\Structural\Composite\Car;

class Interior extends Equipment
{
    public function __construct()
    {
        parent::__construct('Interior', 1000.00);
    }
}
