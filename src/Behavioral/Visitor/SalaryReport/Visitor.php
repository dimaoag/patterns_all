<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor\SalaryReport;

/**
 * Интерфейс Посетителя объявляет набор методов посещения для каждого класса
 * Конкретного Компонента.
 */
interface Visitor
{
    public function visitCompany(Company $company): string;

    public function visitDepartment(Department $department): string;

    public function visitEmployee(Employee $employee): string;
}
