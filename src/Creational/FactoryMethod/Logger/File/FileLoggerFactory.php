<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Logger\File;

use App\Creational\FactoryMethod\Logger\Logger;
use App\Creational\FactoryMethod\Logger\LoggerFactory;

class FileLoggerFactory implements LoggerFactory
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}
