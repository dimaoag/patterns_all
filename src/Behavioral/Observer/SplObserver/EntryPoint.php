<?php

declare(strict_types=1);

namespace App\Behavioral\Observer\SplObserver;

class EntryPoint
{
    public function run(): void
    {
        $repository = new UserRepository();
        $repository->attach(new Logger(__DIR__ . "/log.txt"));
        $repository->attach(new OnboardingNotification("1@example.com"), "users:created");

        $repository->initialize(__DIR__ . "/users.csv");

        $user = $repository->createUser([
            "name" => "John Smith",
            "email" => "john99@example.com",
        ]);

        $repository->deleteUser($user);

        /*
            Output

            UserRepository: Loading user records from a file.
            UserRepository: Broadcasting the 'users:init' event.
            Logger: I've written 'users:init' entry to the log.
            UserRepository: Creating a user.
            UserRepository: Broadcasting the 'users:created' event.
            OnboardingNotification: The notification has been emailed!
            Logger: I've written 'users:created' entry to the log.
            UserRepository: Deleting a user.
            UserRepository: Broadcasting the 'users:deleted' event.
            Logger: I've written 'users:deleted' entry to the log.
         */
    }
}
