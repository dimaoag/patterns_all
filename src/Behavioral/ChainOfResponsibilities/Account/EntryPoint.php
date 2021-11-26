<?php

declare(strict_types=1);

namespace App\Behavioral\ChainOfResponsibilities\Account;

class EntryPoint
{
    public function run(): void
    {
        $paySystem = new MasterCard(100);
        $paySystem
            ->setNext(new PayPal(200))
            ->setNext(new Visa(500));

        if ($paySystem->pay(438)) {
            echo 'Good';
        }
    }
}
