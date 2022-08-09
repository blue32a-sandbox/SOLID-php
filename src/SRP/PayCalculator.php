<?php

declare(strict_types=1);

namespace SOLID\SRP;

/**
 * 経理部門が規定する。報告先はCFO。
 */
class PayCalculator
{
    public function __construct(private EmployeeData $data)
    {
    }

    public function calculatePay()
    {
    }
}
