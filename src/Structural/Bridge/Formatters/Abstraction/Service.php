<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Formatters\Abstraction;

use App\Structural\Bridge\Formatters\Implementation\Formatter;

abstract class Service
{
    protected Formatter $implementation;

    public function __construct(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    public function setImplementation(Formatter $printer): void
    {
        $this->implementation = $printer;
    }

    abstract public function get(): string;
}
