<?php

declare(strict_types=1);

namespace App\Structural\DataMapper;

class StorageAdapter
{
    private array $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id): array | null
    {
        return $this->data[$id] ?? null;
    }
}
