<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork\Facebook;

use App\Creational\FactoryMethod\SocialNetwork\SocialNetwork;
use App\Creational\FactoryMethod\SocialNetwork\SocialNetworkPoster;

class FacebookPoster extends SocialNetworkPoster
{
    private string $login;
    private string $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetwork
    {
        return new Facebook($this->login, $this->password);
    }
}
