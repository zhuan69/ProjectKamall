<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attribute that mass assignable
     *
     * @var string[]
     */
    protected $fillable = [
        'invoice',
        'shipping_cost',
        'courier',
        'total',
        'users_id',
        'discount',
        'delivery_address',
    ];

    /**
     * The function define relation One to Many(inversion)
     *
     * @return BelongsTo
     */
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The function define relation One to One(inversion)
     *
     * @return BelongsTo
     */
    public function transactionDetail(): BelongsTo
    {
        return $this->belongsTo(TransactionDetail::class);
    }
}
