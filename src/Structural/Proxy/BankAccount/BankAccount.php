<?php

declare(strict_types=1);

namespace App\Structural\Proxy\BankAccount;

interface BankAccount
{
    public function deposit(int $amount): void;

    public function getBalance(): int;
}
