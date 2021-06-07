<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use SoftDeletes;

    /**
     * The attributes that aren't mass assignable. (All attributes are mass assignable.)
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes which are excluded from every query.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * PaymentMethod has many Bills.
     *
     * @return HasMany
     */
    public function bills(): HasMany {
        return $this->hasMany(Bill::class);
    }
}
