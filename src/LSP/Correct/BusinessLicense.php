<?php

declare(strict_types=1);

namespace SOLID\LSP\Correct;

class BusinessLicense implements License
{
    public function __construct(private array $users)
    {
    }

    public function calcFee(): int
    {
        return 0; // example
    }
}
