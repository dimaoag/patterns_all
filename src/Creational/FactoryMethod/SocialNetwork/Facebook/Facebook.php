<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork\Facebook;

use App\Creational\FactoryMethod\SocialNetwork\SocialNetwork;

class Facebook implements SocialNetwork
{
    private string $login;
    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login\n";
    }

    public function createPost(string $content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}
