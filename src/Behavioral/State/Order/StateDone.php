<?php

declare(strict_types=1);

namespace App\Behavioral\State\Order;

class StateDone implements State
{
    public function proceedToNext(OrderContext $context): void
    {
        // there is nothing more to do
    }

    public function toString(): string
    {
        return 'done';
    }
}
