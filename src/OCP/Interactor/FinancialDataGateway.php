<?php

declare(strict_types=1);

namespace SOLID\OCP\Interactor;

use DateTimeImmutable;

Interface FinancialDataGateway
{
    public function find(DateTimeImmutable $from, DateTimeImmutable $to): array;
}
