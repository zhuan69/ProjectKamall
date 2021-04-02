<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * This variable define table name
     *
     * @var string
     */
    public $table = 'transaction_details';

    /**
     * This variable define timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attribute that mass assignable
     *
     * @var string[]
     */
    protected $fillable = [
        'transactions_id',
        'products_id',
        'qty'
    ];

    public function transactions(){
        return $this->hasOne(Transaction::class);
    }
}
