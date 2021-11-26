<?php
declare(strict_types=1);

namespace App\Structural\Composite\Music;

interface MusicInterface
{
    public function play(): string|null;
}
