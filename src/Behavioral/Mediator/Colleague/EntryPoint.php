<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Colleague;

class EntryPoint
{
    public function run(): void
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());
        $mediator->printInfoAbout('Dominik');
    }
}
