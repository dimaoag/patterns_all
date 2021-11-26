<?php

declare(strict_types=1);

namespace App\Structural\Adapter\Books;

interface Book
{
    public function turnPage(): void;

    public function open(): void;

    public function getPage(): int;
}
