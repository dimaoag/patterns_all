<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork2\Message;

interface MessageInterface
{
    public function getText(): string;
    public function getSource(): string;
    public function getTarget(): string;
    public function send(): void;
}
