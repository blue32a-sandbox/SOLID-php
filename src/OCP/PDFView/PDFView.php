<?php

declare(strict_types=1);

namespace SOLID\OCP\PDFView;

use SOLID\OCP\PrintPresenter\PrintView;
use SOLID\OCP\PrintPresenter\PrintViewModel;

class PDFView implements PrintView
{
    public function create(PrintViewModel $viewModel): string
    {
        return 'PDF data';
    }
}
