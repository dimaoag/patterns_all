<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Page;

use App\Structural\Bridge\Page\Abstraction\Page;

/**
 * Клиентский код имеет дело только с объектами Абстракции.
 */
class Viewer
{
    public function view(Page $page): void
    {
        echo $page->view();
    }
}
