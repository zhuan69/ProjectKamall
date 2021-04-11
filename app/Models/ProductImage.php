<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_images';
    public $timestamps = false;
    protected $fillable = [
        'image_name',
        'products_id',
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
