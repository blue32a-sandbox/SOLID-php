<?php

declare(strict_types=1);

namespace SOLID\OCP\ScreenPresenter;

Interface ScreenView
{
    public function create(ScreenViewModel $viewModel): string;
}
