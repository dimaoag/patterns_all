<?php

declare(strict_types=1);

namespace App\Structural\Decorator\Booking;

class EntryPoint
{
    public function run(): void
    {
        $booking = new DoubleRoomBooking();
        echo $booking->calculatePrice();
        echo $booking->getDescription();
    }

    public function run1(): void
    {
        $booking = new WiFi(new DoubleRoomBooking());
        echo $booking->calculatePrice();
        echo $booking->getDescription();
    }

    public function run2(): void
    {
        $booking = new ExtraBed(new WiFi(new DoubleRoomBooking()));
        echo $booking->calculatePrice();
        echo $booking->getDescription();
    }
}
