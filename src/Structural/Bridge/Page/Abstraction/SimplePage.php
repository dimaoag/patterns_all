<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Page\Abstraction;

use App\Structural\Bridge\Page\Implementation\Renderer;

/**
 * Эта Конкретная Абстракция создаёт простую страницу.
 */
class SimplePage extends Page
{
    protected string $title;
    protected string $content;

    public function __construct(Renderer $renderer, string $title, string $content)
    {
        parent::__construct($renderer);
        $this->title = $title;
        $this->content = $content;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->title),
            $this->renderer->renderTextBlock($this->content),
            $this->renderer->renderFooter()
        ]);
    }
}
