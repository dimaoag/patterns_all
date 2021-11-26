<?php

declare(strict_types=1);

namespace App\Behavioral\ChainOfResponsibilities\CheckUser;

class CheckName extends CheckUser
{
    public function check(User $user): void
    {
        if (! $user->name) {
            throw new \DomainException('User name not found.');
        }

        $this->next($user);
    }

}
