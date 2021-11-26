<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Writer;

interface CsvWriter
{
    public function write(array $line): string;
}
