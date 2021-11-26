<?php

declare(strict_types=1);

namespace App\Creational\StaticFactory;

use InvalidArgumentException;

final class StaticFactory
{
    public static function factory(string $type): Formatter
    {
        if ($type === 'number') {
            return new FormatNumber();
        }

        if ($type === 'string') {
            return new FormatString();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}
