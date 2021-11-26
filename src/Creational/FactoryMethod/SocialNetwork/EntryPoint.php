<?php

declare(strict_types=1);

namespace App\Creational\FactoryMethod\SocialNetwork;

class EntryPoint
{
    public function createPostForFacebook(): void
    {
        $socialNetwork = SocialNetworkFactory::createFacebookSocialNetwork();
        $socialNetwork->createPost('New post in Facebook.');
    }

    public function createPostForLinkedIn(): void
    {
        $socialNetwork = SocialNetworkFactory::createLinkedInSocialNetwork();
        $socialNetwork->createPost('New post in LinkedIn.');
    }
}
