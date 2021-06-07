<?php

namespace App\Repositories;

use App\Models\Bill;

class BillRepository extends ModelRepository
{
    public function __construct(Bill $bill)
    {
        parent::__construct($bill);
    }
}
