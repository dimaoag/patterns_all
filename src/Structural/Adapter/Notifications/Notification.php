<?php

declare(strict_types=1);

namespace App\Structural\Adapter\Notifications;

interface Notification
{
    public function send(string $title, string $message): void;
}
