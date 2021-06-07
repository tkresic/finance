<?php

namespace App\Repositories;

use App\Models\PaymentMethod;

class PaymentMethodRepository extends ModelRepository
{
    public function __construct(PaymentMethod $paymentMethod)
    {
        parent::__construct($paymentMethod);
    }
}
