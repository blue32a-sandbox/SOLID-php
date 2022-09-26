<?php

declare(strict_types=1);

namespace SOLID\OCP\PrintPresenter;

Interface PrintView
{
    public function create(PrintViewModel $viewModel): string;
}
