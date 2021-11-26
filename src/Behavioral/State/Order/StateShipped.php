<?php

declare(strict_types=1);

namespace App\Behavioral\State\Order;

class StateShipped implements State
{
    public function proceedToNext(OrderContext $context): void
    {
        $context->setState(new StateDone());
    }

    public function toString(): string
    {
        return 'shipped';
    }
}
