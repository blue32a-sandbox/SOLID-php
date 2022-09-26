<?php

declare(strict_types=1);

namespace SOLID\OCP\Controller;

use SOLID\OCP\Interactor\FinancialReportResponse;

Interface FinancialReportPresenter
{
    public function render(FinancialReportResponse $response);
}
