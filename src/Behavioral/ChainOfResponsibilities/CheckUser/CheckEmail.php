<?php

declare(strict_types=1);

namespace App\Behavioral\ChainOfResponsibilities\CheckUser;

class CheckEmail extends CheckUser
{
    public function check(User $user): void
    {
        if (! $user->email) {
            throw new \DomainException('User email not found.');
        }

        $this->next($user);
    }

}
