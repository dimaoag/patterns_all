<?php

declare(strict_types=1);

namespace App\Behavioral\Memento\Ticket;

class Memento
{
    private State $state;

    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState(): State
    {
        return $this->state;
    }
}
