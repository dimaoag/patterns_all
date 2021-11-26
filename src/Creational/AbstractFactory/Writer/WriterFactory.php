<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Writer;

interface WriterFactory
{
    public function createCsvWriter(): CsvWriter;
    public function createJsonWriter(): JsonWriter;
}
