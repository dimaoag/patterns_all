<?php

declare(strict_types=1);

namespace App\Behavioral\State\Order;

class OrderContext
{
    private State $state;

    public static function create(): OrderContext
    {
        $order = new self();
        $order->state = new StateCreated();

        return $order;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function proceedToNext(): void
    {
        $this->state->proceedToNext($this);
    }

    public function toString(): string
    {
        return $this->state->toString();
    }
}
