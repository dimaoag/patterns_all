<?php

declare(strict_types=1);

namespace App\Structural\Composite\Car;

abstract class Equipment // Оборудование
{
    protected float $price;
    protected string $name;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
