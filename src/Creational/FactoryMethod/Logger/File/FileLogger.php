<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Logger\File;

use App\Creational\FactoryMethod\Logger\Logger;

class FileLogger implements Logger
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}
