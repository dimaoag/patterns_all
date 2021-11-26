<?php

declare(strict_types=1);

namespace App\Behavioral\State\Transformer\Context;

use App\Behavioral\State\Transformer\State\State;

class Transformer implements State
{
    private State $state;

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function action(): void
    {
        $this->state->action();
    }
}
