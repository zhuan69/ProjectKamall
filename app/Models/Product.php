<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attribute that mass assignable
     *
     * @var string[]
     */
     protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        'categories_id',
        'discount',
        'product_image'
    ];

    /**
     * This variable define timestamps
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The function define relation One To One
     *
     * @return HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    /**
     * The function define relation One to Many(inversion)
     *
     * @return BelongsTo
     */
    public function carts(): BelongsTo
    {
        return $this->belongsTo(UserCart::class);
    }
}
