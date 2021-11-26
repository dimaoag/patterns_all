<?php

declare(strict_types=1);

namespace App\Creational\AbstractFactory\Writer\Win;

use App\Creational\AbstractFactory\Writer\JsonWriter;

class WinJsonWriter implements JsonWriter
{
    public function write(array $data, bool $formatted): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR | JSON_PRETTY_PRINT);
    }
}
