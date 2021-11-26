<?php

declare(strict_types=1);

namespace App\Structural\Decorator\Booking;

abstract class BookingDecorator implements Booking
{
    protected Booking $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}
