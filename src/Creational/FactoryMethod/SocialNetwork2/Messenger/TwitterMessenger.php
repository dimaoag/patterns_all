<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork2\Messenger;

use App\Creational\FactoryMethod\SocialNetwork2\Message\MessageInterface;
use App\Creational\FactoryMethod\SocialNetwork2\Message\TwitterMessage;

class TwitterMessenger extends MessengerBase
{
    public function isConnected(): bool
    {
        echo 'Connect to Twitter with' . $this->getUsername() . ' and ' . $this->getPassword();

        return true;
    }

    public function createMessage(string $text, string $source, string $target): MessageInterface
    {
        echo 'some twitter validation';

        return new TwitterMessage($text, $source, $target);
    }
}
