<?php

declare(strict_types=1);

namespace App\Behavioral\State\Order;

class EntryPoint
{
    public function run(): void
    {

        $orderContext = OrderContext::create();

        echo $orderContext->toString(); // created

        $orderContext->proceedToNext();

        echo $orderContext->toString(); // shipped

        $orderContext->proceedToNext();

        echo $orderContext->toString(); // done

        $orderContext->proceedToNext();

        echo $orderContext->toString(); // done
    }
}
