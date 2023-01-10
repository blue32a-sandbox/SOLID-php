<?php

declare(strict_types=1);

namespace SOLID\LSP\Incorrect;

class Square extends Rectangle
{
    public function setSide(int $side): void
    {
        $this->setHeight($side);
        $this->setWidth($side);
    }
}
