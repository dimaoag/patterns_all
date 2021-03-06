<?php

declare(strict_types=1);

namespace App\Structural\Flyweight\Text;

class Character implements Text
{
    /**
     * Any state stored by the concrete flyweight must be independent of its context.
     * For flyweights representing characters, this is usually the corresponding character code.
     */
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $font): string
    {
        // Clients supply the context-dependent information that the flyweight needs to draw itself
        // For flyweights representing characters, extrinsic state usually contains e.g. the font.

        return sprintf('Character %s with font %s', $this->name, $font);
    }
}