<?php

declare(strict_types=1);

namespace App\Behavioral\Command\Car;

class StopCommand implements Command
{
    private Engine $engine;

    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }


    public function execute(): void
    {
        $this->engine->off();
    }
}
