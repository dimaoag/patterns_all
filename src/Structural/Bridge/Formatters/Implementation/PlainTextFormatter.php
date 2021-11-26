<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Formatters\Implementation;

class PlainTextFormatter implements Formatter
{
    public function format(string $text): string
    {
        return $text;
    }
}
