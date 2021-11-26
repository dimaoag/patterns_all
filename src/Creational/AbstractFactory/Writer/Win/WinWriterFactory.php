<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Writer\Win;

use App\Creational\AbstractFactory\Writer\CsvWriter;
use App\Creational\AbstractFactory\Writer\JsonWriter;
use App\Creational\AbstractFactory\Writer\WriterFactory;

class WinWriterFactory implements WriterFactory
{
    public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }
}
