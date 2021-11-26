<?php

declare(strict_types=1);

namespace App\Behavioral\Memento\Originator;

/**
 * Конкретный снимок содержит инфраструктуру для хранения состояния Создателя.
 */
class ConcreteMemento implements Memento
{
    private string $state;
    private string $date;

    public function __construct(string $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    /**
     * Создатель использует этот метод, когда восстанавливает своё состояние.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Остальные методы используются Опекуном для отображения метаданных.
     */
    public function getName(): string
    {
        return $this->date . " / (" . substr($this->state, 0, 9) . "...)";
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
