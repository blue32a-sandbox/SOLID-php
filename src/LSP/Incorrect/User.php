<?php

declare(strict_types=1);

namespace SOLID\LSP\Incorrect;

class User
{
    public function draw(Rectangle $shape): void
    {
        // $shapeがSquareだとおかしなことになってしまう・・・
        $shape->setHeight(10);
        $shape->setWidth(5);

        // draw shape
    }
}
