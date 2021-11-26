<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Page\Abstraction;

use App\Structural\Bridge\Page\Implementation\Renderer;

/**
 * Эта Конкретная Абстракция создаёт более сложную страницу.
 */
class ProductPage extends Page
{
    protected Product $product;

    public function __construct(Renderer $renderer, Product $product)
    {
        parent::__construct($renderer);
        $this->product = $product;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->product->getTitle()),
            $this->renderer->renderTextBlock($this->product->getDescription()),
            $this->renderer->renderImage($this->product->getImage()),
            $this->renderer->renderLink("/cart/add/" . $this->product->getId(), "Add to cart"),
            $this->renderer->renderFooter()
        ]);
    }
}
