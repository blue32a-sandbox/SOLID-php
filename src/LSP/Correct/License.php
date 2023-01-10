<?php

declare(strict_types=1);

namespace SOLID\LSP\Correct;

interface License
{
    public function calcFee(): int;
}
