<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

class Bill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['payment_method_id', 'business_place_label', 'restored_bill_id', 'user', 'branch', 'products', 'number', 'label', 'gross', 'restoring_reason'];

    /**
     * The attributes which are excluded from every query.
     *
     * @var array
     */
    protected $hidden = ['updated_at', 'deleted_at'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'user' => 'array',
        'branch' => 'array',
        'products' => 'array',
    ];

    /**
     * Bill belongs to one Payment Method.
     *
     * @return BelongsTo
     */
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    /**
     * Bill can restore a Bill.
     *
     * @return BelongsTo
     */
    public function restoredBill(): BelongsTo
    {
        return $this->belongsTo(self::class, 'restored_bill_id');
    }

    /**
     * Bill can be restored by a Bill.
     *
     * @return HasOne
     */
    public function restoredByBill(): HasOne
    {
        return $this->hasOne(self::class, 'restored_bill_id');
    }

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param DateTimeInterface $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * Format created_at to d.m.Y H:i:s format.
     *
     * @param $value
     * @return string
     */
    public function getCreatedAtAttribute($value): string
    {
        return Carbon::parse($value)->format('d.m.Y H:i:s');
    }
}
