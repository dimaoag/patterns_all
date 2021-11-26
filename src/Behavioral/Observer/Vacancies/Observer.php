<?php

declare(strict_types=1);

namespace App\Behavioral\Observer\Vacancies;

interface Observer
{
    public function handle(array $vacancies): void;
}
