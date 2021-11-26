<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork2\Message;

class TwitterMessage extends MessageBase
{
    public function __construct(string $text, string $source, string $target)
    {
        echo 'Some twitter validation data';
        parent::__construct($text, $source, $target);
    }

    public function send(): void
    {
        echo 'Send message to twitter with content' . $this->getText();
    }
}
