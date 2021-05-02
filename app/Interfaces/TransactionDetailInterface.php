<?php

use App\Models\TransactionDetail;
use Illuminate\Database\Eloquent\ModelNotFoundException;

interface  TransactionDetailInterface{
    /**
     * Get Transaction Detail by Transaction Id
     *
     * @param int $transactionId
     * @return TransactionDetail | ModelNotFoundException
     */
    public function findByTransactionId(int $transactionId);

    /**
     * Create new transaction detail
     *
     * @param array $data
     * @return TransactionDetail
     */
    public function createDetail(array $data): TransactionDetail;
}
