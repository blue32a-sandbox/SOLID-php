<?php

declare(strict_types=1);

namespace SOLID\OCP\ScreenPresenter;

use SOLID\OCP\Controller\FinancialReportPresenter;
use SOLID\OCP\Interactor\FinancialReportResponse;
use SOLID\OCP\WebView\WebView;

class ScreenPresenter implements FinancialReportPresenter
{
    private readonly ScreenView $view;

    public function __construct()
    {
        $this->view = new WebView();
    }

    public function render(FinancialReportResponse $response)
    {
        $viewModel = new ScreenViewModel('タイトル');
        $data = $this->view->create($viewModel);

        // rendering
    }
}
