<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy\PaymentMethod;

use Exception;

/**
 * Этот класс помогает создать правильный объект стратегии для обработки
 * платежа.
 */
class PaymentFactory
{
    /**
     * Получаем способ оплаты по его ID.
     *
     * @param $id
     * @return PaymentMethod
     * @throws Exception
     */
    public static function getPaymentMethod(string $id): PaymentMethod
    {
        return match ($id) {
            "cc" => new CreditCardPayment(),
            "paypal" => new PayPalPayment(),
        default => throw new Exception("Unknown Payment Method"),
        };
    }
}
