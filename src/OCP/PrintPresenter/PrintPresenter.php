<?php

declare(strict_types=1);

namespace SOLID\OCP\PrintPresenter;

use SOLID\OCP\Controller\FinancialReportPresenter;
use SOLID\OCP\Interactor\FinancialReportResponse;
use SOLID\OCP\PDFView\PDFView;

class PrintPresenter implements FinancialReportPresenter
{
    private readonly PrintView $view;
    public function __construct()
    {
        $this->view = new PDFView();
    }

    public function render(FinancialReportResponse $response)
    {
        $viewModel = new PrintViewModel('タイトル');
        $pdf = $this->view->create($viewModel);

        // rendering
    }
}
