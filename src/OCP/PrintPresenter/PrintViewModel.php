<?php

declare(strict_types=1);

namespace SOLID\OCP\PrintPresenter;

class PrintViewModel
{
    public function __construct(private readonly string $title)
    {
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
