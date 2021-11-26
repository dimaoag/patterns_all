<?php

declare(strict_types=1);

namespace App\Behavioral\ChainOfResponsibilities\Account;

abstract class Account
{
    private int $balance;
    private ?Account $account = null;

    public function __construct(int $balance)
    {
        $this->balance = $balance;
    }

    public function setNext(Account $account): Account
    {
        $this->account = $account;

        return $account;
    }

    public function pay(int $orderPrice): bool
    {
        if ($this->canPay($orderPrice)) {
            return true;
        }

        if ($this->account) {
            return $this->account->pay($orderPrice);
        }

        return false;
    }

    private function canPay(int $amount): bool
    {
        return $this->balance >= $amount;
    }
}
