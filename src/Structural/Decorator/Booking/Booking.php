<?php

declare(strict_types=1);

namespace App\Structural\Decorator\Booking;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}
