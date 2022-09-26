<?php

declare(strict_types=1);

namespace SOLID\OCP\Interactor;

use DateTimeImmutable;

class FinancialReportRequest
{
    public DateTimeImmutable $from;
    public DateTimeImmutable $to;

    public string $type;
}
