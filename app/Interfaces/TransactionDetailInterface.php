<?php

use App\Models\TransactionDetail;

interface  TransactionDetailInterface{
    /**
     * Get Transaction Detail by Transaction Id
     *
     * @param int $transactionId
     * @return TransactionDetail
     */
    public function findByTransactionId(int $transactionId): TransactionDetail;

    /**
     * Create new transaction detail
     *
     * @param array $data
     * @return TransactionDetail
     */
    public function createDetail(array $data): TransactionDetail;
}
