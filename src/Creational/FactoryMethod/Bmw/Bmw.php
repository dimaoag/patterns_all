<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\Bmw;

class Bmw
{
    private string $model;
    private float $price;
    private int $maxSpeed;

    public function __construct(string $model, float $price, int $maxSpeed)
    {
        $this->model = $model;
        $this->price = $price;
        $this->maxSpeed = $maxSpeed;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}
