<?php

declare(strict_types=1);

namespace App\Structural\Adapter\Books;

class EntryPoint
{
    public function forPaperBook(): void
    {
        $book = new PaperBook();
        $this->getCurrentPage($book);
    }

    public function forEbook(): void
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);
        $this->getCurrentPage($book);
    }

    private function getCurrentPage(Book $book): int
    {
        $book->open();
        $book->turnPage();
        return $book->getPage();
    }
}
