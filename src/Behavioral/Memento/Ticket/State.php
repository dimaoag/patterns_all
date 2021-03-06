<?php

declare(strict_types=1);

namespace App\Behavioral\Memento\Ticket;

use InvalidArgumentException;

class State
{
    public const STATE_CREATED = 'created';
    public const STATE_OPENED = 'opened';
    public const STATE_ASSIGNED = 'assigned';
    public const STATE_CLOSED = 'closed';

    private string $state;

    private static array $validStates = [
        self::STATE_CREATED,
        self::STATE_OPENED,
        self::STATE_ASSIGNED,
        self::STATE_CLOSED,
    ];

    public function __construct(string $state)
    {
        self::ensureIsValidState($state);

        $this->state = $state;
    }

    private static function ensureIsValidState(string $state): void
    {
        if (!in_array($state, self::$validStates, true)) {
            throw new InvalidArgumentException('Invalid state given');
        }
    }

    public function __toString(): string
    {
        return $this->state;
    }
}
