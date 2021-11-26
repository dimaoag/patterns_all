<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor\SalaryReport;

/**
 * Конкретный Посетитель должен предоставить реализации для каждого из классов
 * Конкретных Компонентов.
 */
class SalaryReport implements Visitor
{
    public function visitCompany(Company $company): string
    {
        $output = "";
        $total = 0;

        foreach ($company->getDepartments() as $department) {
            $total += $department->getCost();
            $output .= "\n--" . $this->visitDepartment($department);
        }

        $output = $company->getName() .
            " (USD". $total . ")\n" . $output;

        return $output;
    }

    public function visitDepartment(Department $department): string
    {
        $output = "";

        foreach ($department->getEmployees() as $employee) {
            $output .= "   " . $this->visitEmployee($employee);
        }

        $output = $department->getName() .
            " (USD" . $department->getCost() . ")\n\n" .
            $output;

        return $output;
    }

    public function visitEmployee(Employee $employee): string
    {
        return "$" . $employee->getSalary() .
            " " . $employee->getName() .
            " (" . $employee->getPosition() . ")\n";
    }
}
