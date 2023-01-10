<?php

declare(strict_types=1);

namespace SOLID\LSP\Incorrect;

class Rectangle
{
    private int $height;
    private int $width;

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }
}
