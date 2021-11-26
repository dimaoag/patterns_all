<?php

declare(strict_types=1);

namespace App\Behavioral\ChainOfResponsibilities\Middleware;

class EntryPoint
{
    public function run(): void
    {
        /**
         * Клиентский код.
         */
        $server = new Server();
        $server->register("admin@example.com", "admin_pass");
        $server->register("user@example.com", "user_pass");

        // Все middleware соединены в цепочки. Клиент может построить различные
        // конфигурации цепочек в зависимости от своих потребностей.
        $middleware = new ThrottlingMiddleware(2);
        $middleware
            ->linkWith(new UserExistsMiddleware($server))
            ->linkWith(new RoleCheckMiddleware());

        // Сервер получает цепочку из клиентского кода.
        $server->setMiddleware($middleware);

        // ...

        do {
            echo "\nEnter your email:\n";
            $email = readline();
            echo "Enter your password:\n";
            $password = readline();
            $success = $server->logIn($email, $password);
        } while (!$success);
    }
}
