<?php

declare(strict_types=1);

namespace SOLID\LSP\Correct;

class PersonalLicense implements License
{
    public function calcFee(): int
    {
        return 0; // example
    }
}
