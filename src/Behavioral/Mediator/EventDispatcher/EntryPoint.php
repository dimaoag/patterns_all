<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\EventDispatcher;

class EntryPoint
{
    public function run(): void
    {
        $repository = new UserRepository();
        $events = (require __DIR__ . '/events.php')();
        $events->attach($repository, "facebook:update");

        $logger = new Logger(__DIR__ . "/log.txt");
        $events->attach($logger, "*");

        $onboarding = new OnboardingNotification("1@example.com");
        $events->attach($onboarding, "users:created");

        $repository->initialize(__DIR__ . "users.csv");

        $user = $repository->createUser([
            "name" => "John Smith",
            "email" => "john99@example.com",
        ]);

        $user->delete();
    }
}
