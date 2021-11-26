<?php

declare(strict_types=1);

namespace App\Structural\Composite\Music;

class EntryPoint
{
    public function run(): void
    {
        $rockPlaylist = new Playlist();
        $rockPlaylist->addSong(new Song('The Kill', '30 Seconds to Mars', '/music/thekill.mp3'));
        $rockPlaylist->addSong(new Song('Given Up', 'Linkin Park', '/music/givenup.mp3'));
        $rockPlaylist->addSong(new Song('Pretty Fly', 'The Offspring', '/music/prettyfly.mp3'));

        $rockPlaylist->play();
        $rockPlaylist->next();
        $rockPlaylist->previous();
    }
}
