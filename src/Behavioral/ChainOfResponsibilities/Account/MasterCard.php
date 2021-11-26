<?php

declare(strict_types=1);

namespace App\Behavioral\ChainOfResponsibilities\Account;

class MasterCard extends Account
{
    public string $name;

    public function __construct(int $balance)
    {
        parent::__construct($balance);
        $this->name = 'Master Card';
    }
}
