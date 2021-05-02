<?php


namespace App\Repositories;


use App\Models\Transaction;
use Exception;
use TransactionInterface;

class TransactionRepository implements TransactionInterface
{

    /**
     * @inheritDoc
     */
    public function findByStatus(string $status)
    {
        try {
            return Transaction::where('status', $status)->get();
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * @inheritDoc
     */
    public function findAllByUserId(int $userId)
    {
        try {
            return Transaction::where('users_id', $userId)->get();
        } catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    /**
     * @inheritDoc
     */
    public function createTransaction(array $data): Transaction
    {
        return Transaction::create($data);
    }

    /**
     * @inheritDoc
     */
    public function cancelTransaction(int $id): Transaction
    {
        return Transaction::find($id)->update([
            'status' => 'Cancel'
        ]);
    }

    /**
     * @inheritDoc
     */
    public function approveTransaction(int $id): Transaction
    {
        return Transaction::find($id)->update([
            'status' => 'Approved'
        ]);
    }
}
