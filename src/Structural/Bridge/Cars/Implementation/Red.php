<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Cars\Implementation;

class Red implements Color
{
    public function getValue(): string
    {
        return 'red';
    }
}
