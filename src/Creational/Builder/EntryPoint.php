<?php

declare(strict_types=1);

namespace App\Creational\Builder;

class EntryPoint
{
    public function run(): void
    {
        $queryBuilder = new MysqlQueryBuilder();
        $query = $queryBuilder
            ->select("users", ["name", "email", "password"])
            ->where("age", (string) 18, ">")
            ->where("age", (string) 30, "<")
            ->limit(10, 20)
            ->getSQL();

        echo $query;
    }
}
