<?php

namespace App\Repositories;

use App\Models\Tax;

class TaxRepository extends ModelRepository
{
    public function __construct(Tax $tax)
    {
        parent::__construct($tax);
    }
}
