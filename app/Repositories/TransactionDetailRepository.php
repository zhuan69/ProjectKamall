<?php


namespace App\Repositories;


use App\Models\TransactionDetail;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use TransactionDetailInterface;

class TransactionDetailRepository implements TransactionDetailInterface
{

    /**
     * @inheritDoc
     */
    public function findByTransactionId(int $transactionId)
    {
        try {
            return TransactionDetail::where('transactions_id', $transactionId)->first();
        }catch (ModelNotFoundException $exception){
            return $exception->getMessage();
        }
    }

    /**
     * @inheritDoc
     */
    public function createDetail(array $data): TransactionDetail
    {
        return TransactionDetail::create($data);
    }
}
