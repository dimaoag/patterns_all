<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Colleague;

class Ui extends Colleague
{
    public function outputUserInfo(string $username): void
    {
        echo $this->mediator->getUser($username);
    }
}
