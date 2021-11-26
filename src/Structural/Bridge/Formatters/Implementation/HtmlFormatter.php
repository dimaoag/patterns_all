<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Formatters\Implementation;

class HtmlFormatter implements Formatter
{
    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}
