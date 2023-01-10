<?php

declare(strict_types=1);

namespace SOLID\OCP\Database;

use DateTime;
use DateTimeImmutable;
use SOLID\OCP\Interactor\Entity\Transaction;
use SOLID\OCP\Interactor\FinancialDataGateway;

class FinancialDataMapper implements FinancialDataGateway
{
    private FinancialDatabase $database;

    public function __construct()
    {
        $this->database = new FinancialDatabase();
    }

    /**
     * @return Transaction[]
     */
    public function find(
        DateTimeImmutable $from,
        DateTimeImmutable $to
    ): array {
        $dataset = $this->database->query(
            'SELECT * FROM transaction WHERE datetime >= :from AND datetime <= :to',
            [
                'from' => $from,
                'to' => $to,
            ]
        );
        $result = [];
        foreach ($dataset as $data) {
            $transaction = new Transaction();
            $transaction->id = $data['id'];
            $transaction->date = new DateTime($data['datetime']);
            $transaction->price = $data['price'];
            $result[] = $transaction;
        }
        return $result;
    }
}
