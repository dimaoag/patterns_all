<?php

declare(strict_types=1);

namespace App\Structural\Flyweight\Text;


interface Text
{
    public function render(string $extrinsicState): string;
}
