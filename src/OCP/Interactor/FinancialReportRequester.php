<?php

declare(strict_types=1);

namespace SOLID\OCP\Interactor;

Interface FinancialReportRequester
{
    public function generate(FinancialReportRequest $request): FinancialReportResponse;
}
