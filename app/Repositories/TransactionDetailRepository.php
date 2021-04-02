<?php


namespace App\Repositories;


use App\Models\TransactionDetail;
use TransactionDetailInterface;

class TransactionDetailRepository implements TransactionDetailInterface
{

    /**
     * @inheritDoc
     */
    public function findByTransactionId(int $transactionId): TransactionDetail
    {
        // TODO: Implement findByTransactionId() method.
    }

    /**
     * @inheritDoc
     */
    public function createDetail(array $data): TransactionDetail
    {
        // TODO: Implement createDetail() method.
    }
}
