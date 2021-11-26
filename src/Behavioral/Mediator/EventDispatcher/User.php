<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\EventDispatcher;

/**
 * Давайте сохраним класс Пользователя тривиальным, так как он не является
 * главной темой нашего примера.
 */
class User
{
    public array $attributes = [];

    public function update(array $data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }

    /**
     * Все объекты могут вызывать события.
     */
    public function delete(): void
    {
        echo "User: I can now delete myself without worrying about the repository.\n";
        $events = (require __DIR__ . '/events.php')();
        $events->trigger("users:deleted", $this, $this);
    }
}
