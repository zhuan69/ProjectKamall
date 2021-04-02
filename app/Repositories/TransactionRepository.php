<?php


namespace App\Repositories;


use App\Models\Transaction;
use TransactionInterface;

class TransactionRepository implements TransactionInterface
{

    /**
     * @inheritDoc
     */
    public function findByStatus(string $status): Transaction
    {
        // TODO: Implement findByStatus() method.
    }

    /**
     * @inheritDoc
     */
    public function findAllByUserId(int $userId): Transaction
    {
        // TODO: Implement findAllByUserId() method.
    }

    /**
     * @inheritDoc
     */
    public function createTransaction(array $data): Transaction
    {
        // TODO: Implement createTransaction() method.
    }

    /**
     * @inheritDoc
     */
    public function cancelTransaction(int $id): Transaction
    {
        // TODO: Implement cancelTransaction() method.
    }

    /**
     * @inheritDoc
     */
    public function approveTransaction(int $id): Transaction
    {
        // TODO: Implement approveTransaction() method.
    }
}
