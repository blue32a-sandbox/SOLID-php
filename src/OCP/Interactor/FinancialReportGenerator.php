<?php

declare(strict_types=1);

namespace SOLID\OCP\Interactor;

class FinancialReportGenerator implements FinancialReportRequester
{
    public function __construct(
        private readonly FinancialDataGateway $dataGateway
    ) {
    }

    public function generate(FinancialReportRequest $request): FinancialReportResponse
    {
        $transactions = $this->dataGateway->find($request->from, $request->to);
        return new FinancialReportResponse($transactions);
    }
}
