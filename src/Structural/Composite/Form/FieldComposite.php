<?php

declare(strict_types=1);

namespace App\Structural\Composite\Form;

/**
 * Базовый класс Контейнер реализует инфраструктуру для управления дочерними
 * объектами, повторно используемую всеми Конкретными Контейнерами.
 */
abstract class FieldComposite extends FormElement
{
    /**
     * @var FormElement[]
     */
    protected array $fields = [];

    /**
     * Методы добавления/удаления подобъектов.
     * @param FormElement $field
     */
    public function add(FormElement $field): void
    {
        $name = $field->getName();
        $this->fields[$name] = $field;
    }

    public function remove(FormElement $component): void
    {
        $this->fields = array_filter($this->fields, static function (FormElement $element) use ($component) {
            return $element->getName() !== $component->getName();
        });
    }

    /**
     * В то время как метод Листа просто выполняет эту работу, метод Контейнера
     * почти всегда должен учитывать его подобъекты.
     *
     * В этом случае контейнер может принимать структурированные данные.
     *
     * @param array $data
     */
    public function setData(array $data): void
    {
        foreach ($this->fields as $name => $field) {
            if (isset($data[$name])) {
                $field->setData($data[$name]);
            }
        }
    }

    /**
     * Та же логика применима и к получателю. Он возвращает структурированные
     * данные самого контейнера (если они есть), а также все дочерние данные.
     */
    public function getData(): array
    {
        $data = [];

        foreach ($this->fields as $name => $field) {
            $data[$name] = $field->getData();
        }

        return $data;
    }

    /**
     * Базовая реализация рендеринга Контейнера просто объединяет результаты
     * всех дочерних элементов. Конкретные Контейнеры смогут повторно
     * использовать эту реализацию в своих реальных реализациях рендеринга.
     */
    public function render(): string
    {
        $output = "";

        foreach ($this->fields as $name => $field) {
            $output .= $field->render();
        }

        return $output;
    }
}
