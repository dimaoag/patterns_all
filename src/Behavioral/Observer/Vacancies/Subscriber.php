<?php

declare(strict_types=1);

namespace App\Behavioral\Observer\Vacancies;

class Subscriber implements Observer
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function handle(array $vacancies): void
    {
        echo 'Dear ' . $this->name . ' we have some changes in vacancies';
    }

    public function getName(): string
    {
        return $this->name;
    }
}
