<?php

declare(strict_types=1);

namespace App\Behavioral\Observer\Vacancies;

interface Observed
{
    public function notifyObservers(): void;
}
