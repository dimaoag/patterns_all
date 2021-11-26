<?php

declare(strict_types=1);

namespace App\Structural\Composite\Car;

abstract class Composite extends Equipment
{
    /** @var Equipment[] */
    private array $equipments = [];

    public function __construct(string $name)
    {
        parent::__construct($name, 0.00);
    }

    public function add(Equipment $equipment): void
    {
        $this->equipments[] = $equipment;
    }

    public function getPrice(): float
    {
        $price = $this->price;

        if ($this->equipments) {
            foreach ($this->equipments as $equipment) {
                $price += $equipment->getPrice();
            }
        }

        return $price;
    }
}
