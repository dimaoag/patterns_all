<?php

declare(strict_types=1);

namespace App\Behavioral\TemplateMethod;

class EntryPoint
{
    public function run(): void
    {
        echo "Same client code can work with different subclasses:\n";
        (new ConcreteClass1())->templateMethod();
        echo "\n";

        echo "Same client code can work with different subclasses:\n";
        (new ConcreteClass2())->templateMethod();
    }
}
