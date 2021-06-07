<?php

namespace App\Repositories;

use App\Models\Shift;

class ShiftRepository extends ModelRepository
{
    public function __construct(Shift $shift)
    {
        parent::__construct($shift);
    }
}
