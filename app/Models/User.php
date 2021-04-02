<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * This Variable define table name
     *
     * @var string
     */
    public $table = 'users';

    /**
     * This Variable define timestamps
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'name',
        'email',
        'phone_number',
        'roles_id',
        'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The function define relation One To One
     *
     * @return HasOne
     */
    public function roles(){
        return $this->hasOne(Role::class);
    }

    /**
     * The function define relation One to Many
     *
     * @return HasMany
     */
    public function transactions(){
        return $this->hasMany(Transaction::class);
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
