<?php

declare(strict_types=1);

namespace SOLID\SRP;

/**
 * データベース管理者が規定する。報告先はCTO。
 */
class EmployeeSaver
{
    public function __construct(private EmployeeData $data)
    {
    }

    public function saveEmployee()
    {
    }
}
