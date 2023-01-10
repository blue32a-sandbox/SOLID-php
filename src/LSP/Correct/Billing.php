<?php

declare(strict_types=1);

namespace SOLID\LSP\Correct;

class Billing
{
    public function __construct(private License $license)
    {
    }

    public function exec()
    {
        $fee = $this->license->calcFee();

        // bill
    }
}
