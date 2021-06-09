<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Shift extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['gross', 'user', 'start', 'end'];

    /**
     * The attributes which are excluded from every query.
     *
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'user' => 'array',
    ];

    /**
     * Format start attribute to d.m.Y H:i:s format.
     *
     * @param $value
     * @return string
     */
    public function getStartAttribute($value): string
    {
        return Carbon::parse($value)->format('d.m.Y H:i:s');
    }

    /**
     * Format end attribute to d.m.Y H:i:s format.
     *
     * @param $value
     * @return string|null
     */
    public function getEndAttribute($value): ?string
    {
        return $value !== null ? Carbon::parse($value)->format('d.m.Y H:i:s') : '/';
    }
}
