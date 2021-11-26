<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\EventDispatcher;

/**
 * Интерфейс Наблюдателя определяет, как компоненты получают уведомления о
 * событиях.
 */
interface Observer
{
    public function update(string $event, object $emitter, mixed $data = null): void;
}