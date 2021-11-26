<?php
declare(strict_types=1);

namespace App\Structural\Composite\Music;

class Song implements MusicInterface
{
    private string $title;
    private string $artist;
    private string $path;

    public function __construct(string $title, string $artist, string $path)
    {
        $this->title = $title;
        $this->artist = $artist;
        $this->path = $path;
    }


    public function play(): string
    {
        return $this->path;
    }
}
