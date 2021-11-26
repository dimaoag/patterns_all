<?php

declare(strict_types=1);

namespace App\Behavioral\Command\Car;

class Engine
{
    private bool $state;

    public function __construct()
    {
        $this->state = false;
    }

    public function on(): void
    {
        $this->state = true;
    }

    public function off(): void
    {
        $this->state = false;
    }
}
