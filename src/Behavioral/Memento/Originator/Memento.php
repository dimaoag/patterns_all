<?php

declare(strict_types=1);

namespace App\Behavioral\Memento\Originator;

/**
 * Интерфейс Снимка предоставляет способ извлечения метаданных снимка, таких как
 * дата создания или название. Однако он не раскрывает состояние Создателя.
 */
interface Memento
{
    public function getName(): string;

    public function getDate(): string;
}
