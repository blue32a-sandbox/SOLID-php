<?php

declare(strict_types=1);

namespace SOLID\OCP\Controller;

use SOLID\OCP\Interactor\FinancialReportRequest;
use SOLID\OCP\Interactor\FinancialReportRequester;
use SOLID\OCP\PrintPresenter\PrintPresenter;
use SOLID\OCP\ScreenPresenter\ScreenPresenter;

class FinancialReportController
{
    /** @var FinancialReportPresenter[] */
    private array $presenters;

    public function __construct(
        private readonly FinancialReportRequester $requester,
    ) {
        $this->presenters['web'] = new ScreenPresenter();
        $this->presenters['pdf'] = new PrintPresenter();
    }

    public function execute(FinancialReportRequest $request)
    {
        $response = $this->requester->generate($request);
        $presenter = $this->presenters[$request->type];
        $presenter->render($response);
    }
}
