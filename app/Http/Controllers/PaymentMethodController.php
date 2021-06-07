<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentMethodCollection;
use App\Repositories\PaymentMethodRepository;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;

class PaymentMethodController extends Controller
{
    private PaymentMethodRepository $paymentMethodRepository;

    public function __construct(PaymentMethodRepository $paymentMethodRepository)
    {
        $this->paymentMethodRepository = $paymentMethodRepository;
    }

    /**
     * Lists all PaymentMethods.
     *
     * @return PaymentMethodCollection|Response|ResponseFactory
     */
    public function index()
    {
        return response($this->paymentMethodRepository->all(), Response::HTTP_OK);
    }
}
