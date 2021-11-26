<?php

declare(strict_types=1);

namespace App\Structural\Composite\Music;

class Playlist implements MusicInterface
{
    /** @var MusicInterface[] */
    private array $songs = [];
    private int $currentTrack = 0;

    public function addSong(MusicInterface $song): void
    {
        $this->songs[] = $song;
    }


    public function play(): string | null
    {
        if ($this->songs) {
            return $this->songs[$this->currentTrack]->play();
        }

        return null;
    }

    public function next(): string | null
    {
        if (isset($this->songs[$this->currentTrack + 1])) {
            $this->currentTrack++;

            return $this->play();
        }

        return $this->play();
    }

    public function previous(): string | null
    {
        if (count($this->songs) > 0) {
            $this->currentTrack--;

            return $this->play();
        }

        return $this->play();
    }
}
