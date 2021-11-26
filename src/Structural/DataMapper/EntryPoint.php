<?php

declare(strict_types=1);

namespace App\Structural\DataMapper;

class EntryPoint
{
    public function run(): void
    {
        $storage = new StorageAdapter([
            1 => [
                'username' => 'domnikl',
                'email' => 'liebler.dominik@gmail.com'
            ]
        ]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);
        echo $user->getUsername() . ' ' . $user->getEmail();
    }
}
