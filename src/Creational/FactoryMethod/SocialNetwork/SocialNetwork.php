<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork;

interface SocialNetwork
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost(string $content): void;
}
