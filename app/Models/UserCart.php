<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCart extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The variable define table name
     *
     * @var string
     */
    public $table = 'user_carts';

    /**
     * The attribute that mass assignable
     *
     * @var string[]
     */
    protected $fillable = [
        'users_id',
        'products_id',
        'qty'
    ];

    /**
     * The variable define timestamps
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The function define relation One To Many
     *
     * @return HasMany
     */
    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * The function define relation One to One
     *
     * @return HasOne
     */
    public function products():HasOne
    {
        return $this->hasOne(Product::class);
    }
}
