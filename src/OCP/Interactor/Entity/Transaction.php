<?php

declare(strict_types=1);

namespace SOLID\OCP\Interactor\Entity;

use DateTime;

class Transaction
{
    public string $id;
    public DateTime $date;
    public int $price;
}
