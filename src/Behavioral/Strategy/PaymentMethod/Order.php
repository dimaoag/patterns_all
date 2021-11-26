<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy\PaymentMethod;

use DomainException;

class Order
{
    private static array $orders = [];
    public int $id;
    public string $status;
    /**
     * Конструктор Заказа присваивает значения полям заказа. Чтобы всё было
     * просто, нет никакой проверки.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes)
    {
        $this->id = count(static::$orders);
        $this->status = "new";
        foreach ($attributes as $key => $value) {
            $this->{$key} = $value;
        }
        static::$orders[$this->id] = $this;
    }

    public static function get(int $orderId = null): array | Order
    {
        if ($orderId === null) {
            return static::$orders;
        }

        if (array_key_exists($orderId, static::$orders)) {
            return static::$orders[$orderId];
        }

        throw new DomainException('Order not found.');
    }

    public function complete(): void
    {
        $this->status = "completed";
        echo "Order: #{$this->id} is now {$this->status}.";
    }
}
