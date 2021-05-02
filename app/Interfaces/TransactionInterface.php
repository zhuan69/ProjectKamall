<?php

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Collection;

interface TransactionInterface{

    /**
     * Get Transaction Data by Status Filter
     *
     * @param string $status
     * @return Transaction | Collection | null
     */
    public function findByStatus(string $status);

    /**
     * Get Transaction history by user id and already paginate format
     *
     * @param int $userId
     * @return Transaction | Collection | null
     */
    public function findAllByUserId(int $userId);

    /**
     * Create a new transaction
     *
     * @param array $data
     * @return Transaction
     */
    public function createTransaction(array $data): Transaction;

    /**
     * Cancel current process Transaction
     *
     * @param int $id
     * @return Transaction
     */
    public function cancelTransaction(int $id): Transaction;

    /**
     * Approve current process Transaction
     *
     * @param int $id
     * @return Transaction
     */
    public function approveTransaction(int $id): Transaction;
}
