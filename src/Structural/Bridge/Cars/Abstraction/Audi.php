<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Cars\Abstraction;

use App\Structural\Bridge\Cars\Implementation\Color;

class Audi extends Car
{
    public function __construct(Color $color)
    {
        parent::__construct($color);
    }

    public function getColor(): string
    {
        return $this->color->getValue();
    }
}
