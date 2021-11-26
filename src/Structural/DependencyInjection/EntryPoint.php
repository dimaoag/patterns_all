<?php

declare(strict_types=1);

namespace App\Structural\DependencyInjection;

class EntryPoint
{
    public function run(): void
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);
        $connection->getDsn();
    }
}
