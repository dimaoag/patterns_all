<?php

declare(strict_types=1);

namespace App\Creational\StaticFactory;

class EntryPoint
{
    public function run(): void
    {
        $formatterOne = StaticFactory::factory('number');
        $formatterOne->format('1234-is number');

        $formatterTwo = StaticFactory::factory('string');
        $formatterTwo->format('some text');
    }
}
