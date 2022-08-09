<?php

declare(strict_types=1);

namespace SOLID\SRP;

/**
 * 人事部門が規定する。報告先はCOO。
 */
class HourReporter
{
    public function __construct(private EmployeeData $data)
    {
    }

    public function reportHours()
    {
    }
}
