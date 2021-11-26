<?php

declare(strict_types=1);

namespace App\Behavioral\ChainOfResponsibilities\CheckUser;

class CheckId extends CheckUser
{
    public function check(User $user): void
    {
        if (! $user->id) {
            throw new \DomainException('User id not found.');
        }

        $this->next($user);
    }

}
