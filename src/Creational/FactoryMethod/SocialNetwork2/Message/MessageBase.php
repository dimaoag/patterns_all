<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork2\Message;

abstract class MessageBase implements MessageInterface
{
    private string $text;
    private string $source;
    private string $target;

    public function __construct(string $text, string $source, string $target)
    {
        $this->text = $text;
        $this->source = $source;
        $this->target = $target;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    abstract public function send(): void;
}
