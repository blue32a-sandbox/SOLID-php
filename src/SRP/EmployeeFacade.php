<?php

declare(strict_types=1);

namespace SOLID\SRP;

class EmployeeFacade
{
    public function __construct(private EmployeeData $data)
    {
    }

    public function calculatePay()
    {
        (new PayCalculator($this->data))->calculatePay();
    }

    public function HourReporter()
    {
        (new HourReporter($this->data))->reportHours();
    }

    public function save()
    {
        (new EmployeeSaver($this->data))->saveEmployee();
    }
}
