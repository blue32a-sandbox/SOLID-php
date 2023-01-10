<?php

declare(strict_types=1);

namespace SOLID\OCP\ScreenPresenter;

class ScreenViewModel
{
    public function __construct(private readonly string $title)
    {
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
