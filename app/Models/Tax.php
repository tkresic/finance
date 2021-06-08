<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
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
}
