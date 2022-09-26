<?php

declare(strict_types=1);

namespace SOLID\OCP\Interactor;

class FinancialReportResponse
{
    public function __construct(private array $transactions)
    {
    }
}
