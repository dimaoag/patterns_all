<?php

declare(strict_types=1);

namespace App\Structural\Adapter\Books;

/**
 * This is the adapter here. Notice it implements Book,
 * therefore you don't have to change the code of the client which is using a Book
 */
class EBookAdapter implements Book
{
    private EBook $eBook;

    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * This class makes the proper translation from one interface to another.
     */
    public function open(): void
    {
        $this->eBook->unlock();
    }

    public function turnPage(): void
    {
        $this->eBook->pressNext();
    }

    /**
     * notice the adapted behavior here: EBook::getPage() will return two integers, but Book
     * supports only a current page getter, so we adapt the behavior here
     */
    public function getPage(): int
    {
        return $this->eBook->getPages()[0];
    }
}
