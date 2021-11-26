<?php

declare(strict_types=1);

namespace App\Structural\Adapter\Notifications;

class EntryPoint
{
    public function run(): void
    {
        $notification = new EmailNotification("developers@example.com");
        $this->sendNotification($notification);

        $slackApi = new SlackApi("example.com", "XXXXXXXX");
        $notification2 = new SlackNotification($slackApi, "Example.com Developers");
        $this->sendNotification($notification2);
    }

    private function sendNotification(Notification $notification): void
    {
        $notification->send('some title', 'some text');
    }
}
