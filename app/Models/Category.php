<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attribute that mass assignable
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * This variable define timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The function define relation One To One(inversion)
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function subCategory(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
}
