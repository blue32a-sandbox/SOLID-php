<?php

declare(strict_types=1);

namespace SOLID\OCP\WebView;

use SOLID\OCP\ScreenPresenter\ScreenView;
use SOLID\OCP\ScreenPresenter\ScreenViewModel;

class WebView implements ScreenView
{
    public function create(ScreenViewModel $viewModel): string
    {
        return <<<'HTML'
<html>
    <head>
        <title>{$viewModel->getTitle()}</title>
    </head>
    <body>
        <h1>{$viewModel->getTitle()}</h1>
    </body>
</html>
HTML;
    }
}
