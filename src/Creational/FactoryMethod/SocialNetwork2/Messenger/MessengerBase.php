<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork2\Messenger;

use App\Creational\FactoryMethod\SocialNetwork2\Message\MessageInterface;

abstract class MessengerBase implements MessengerInterface
{
    private string $username;
    private string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    abstract public function isConnected(): bool;

    abstract public function createMessage(string $text, string $source, string $target): MessageInterface;
}
