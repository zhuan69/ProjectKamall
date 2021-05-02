<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @mixin Model
 * Class SubCategory
 * @package App\Models
 */
class SubCategory extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;
    protected $table = 'sub_categories';
    protected $fillable =[
        'sub_name',
        'sub_description'
    ];

    public function mainCategory(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
