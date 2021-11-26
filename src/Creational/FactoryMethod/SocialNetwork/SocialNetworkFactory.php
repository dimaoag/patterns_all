<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork;

use App\Creational\FactoryMethod\SocialNetwork\Facebook\FacebookPoster;
use App\Creational\FactoryMethod\SocialNetwork\LinkedIn\LinkedInPoster;

class SocialNetworkFactory
{
    public static function createFacebookSocialNetwork(): SocialNetwork
    {
        return (new FacebookPoster("john_smith", "******"))->getSocialNetwork();
    }

    public static function createLinkedInSocialNetwork(): SocialNetwork
    {
        return (new LinkedInPoster("alex@example.com", "******"))->getSocialNetwork();
    }
}
