<?php

declare(strict_types=1);

namespace App\Behavioral\State\Order;

class StateCreated implements State
{
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new StateShipped());
    }

    public function toString(): string
    {
        return 'created';
    }
}
