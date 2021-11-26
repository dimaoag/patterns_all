<?php

declare(strict_types=1);

namespace App\Structural\Composite\Form;

/**
 * Базовый класс Компонент объявляет интерфейс для всех конкретных компонентов,
 * как простых, так и сложных.
 */
abstract class FormElement
{
    /**
     * Можно предположить, что всем элементам DOM будут нужны эти 3 поля.
     */
    protected string $name;
    protected string $title;
    protected array $data;

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Каждый конкретный элемент DOM должен предоставить свою реализацию
     * рендеринга, но мы можем с уверенностью предположить, что все они будут
     * возвращать строки.
     */
    abstract public function render(): string;
}
