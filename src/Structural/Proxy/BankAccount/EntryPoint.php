<?php

declare(strict_types=1);

namespace App\Structural\Proxy\BankAccount;

class EntryPoint
{
    public function run(): void
    {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        // this time balance is being calculated
        echo $bankAccount->getBalance(); // 30

        // inheritance allows for BankAccountProxy to behave to an outsider exactly like ServerBankAccount
        $bankAccount->deposit(50);

        // this time the previously calculated balance is returned again without re-calculating it
        echo $bankAccount->getBalance(); // 30
    }
}
