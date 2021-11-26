<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy\PaymentMethod;
use Exception;

/**
 * Это роутер и контроллер нашего приложения. Получив запрос, этот класс решает,
 * какое поведение должно выполняться. Когда приложение получает требование об
 * оплате, класс OrderController также решает, какой способ оплаты следует
 * использовать для его обработки. Таким образом, этот класс действует как
 * Контекст и в то же время как Клиент.
 */
class OrderController
{
    /**
     * Обрабатываем запросы POST.
     *
     * @param $url
     * @param $data
     * @throws Exception
     */
    public function createOrder(string $url, array $data): void
    {
        echo "Controller: POST request to $url with " . json_encode($data) . "\n";

        $path = parse_url($url, PHP_URL_PATH);

        if (preg_match('#^/orders?$#', $path, $matches)) {
            $this->newOrder($data);
        } else {
            echo "Controller: 404 page\n";
        }
    }

    /**
     * Обрабатываем запросы GET.
     *
     * @param $url
     * @throws Exception
     */
    public function get(string $url): void
    {
        echo "Controller: GET request to $url\n";

        $path = parse_url($url, PHP_URL_PATH);
        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $data);

        if (preg_match('#^/orders?$#', $path, $matches)) {
            $this->getAllOrders();
        } elseif (preg_match('#^/order/([0-9]+?)/payment/([a-z]+?)(/return)?$#', $path, $matches)) {
            $order = Order::get($matches[1]);

            // Способ оплаты (стратегия) выбирается в соответствии со значением,
            // переданным в запросе.
            $paymentMethod = PaymentFactory::getPaymentMethod($matches[2]);

            if (!isset($matches[3])) {
                $this->getPayment($paymentMethod, $order, $data);
            } else {
                $this->getPaymentReturn($paymentMethod, $order, $data);
            }
        } else {
            echo "Controller: 404 page\n";
        }
    }

    /**
     * POST /order {data}
     * @param array $data
     */
    public function newOrder(array $data): void
    {
        $order = new Order($data);
        echo "Controller: Created the order #{$order->id}.\n";
    }

    /**
     * GET /orders
     */
    public function getAllOrders(): void
    {
        echo "Controller: Here's all orders:\n";
        foreach (Order::get() as $order) {
            echo json_encode($order, JSON_PRETTY_PRINT) . "\n";
        }
    }

    /**
     * GET /order/123/payment/XX
     * @param PaymentMethod $method
     * @param Order         $order
     * @param array         $data
     */
    public function getPayment(PaymentMethod $method, Order $order, array $data): void
    {
        // Фактическая работа делегируется объекту метода оплаты.
        $form = $method->getPaymentForm($order);
        echo "Controller: here's the payment form:\n";
        echo $form . "\n";
    }

    /**
     * GET /order/123/payment/XXX/return?key=AJHKSJHJ3423&success=true
     * @param PaymentMethod $method
     * @param Order         $order
     * @param array         $data
     */
    public function getPaymentReturn(PaymentMethod $method, Order $order, array $data): void
    {
        try {
            // Другой тип работы, делегированный методу оплаты.
            if ($method->validateReturn($order, $data)) {
                echo "Controller: Thanks for your order!\n";
                $order->complete();
            }
        } catch (\Exception $e) {
            echo "Controller: got an exception (" . $e->getMessage() . ")\n";
        }
    }
}
