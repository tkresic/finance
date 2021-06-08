<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentMethodCollection;
use App\Repositories\PaymentMethodRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class PaymentMethodController extends Controller
{
    private PaymentMethodRepository $paymentMethodRepository;

    public function __construct(PaymentMethodRepository $paymentMethodRepository)
    {
        $this->paymentMethodRepository = $paymentMethodRepository;
    }

    /**
     * Lists all payment methods.
     *
     * @return PaymentMethodCollection|Response|ResponseFactory
     */
    public function index()
    {
        return response($this->paymentMethodRepository->all(), Response::HTTP_OK);
    }

    /**
     * Updates the payment method.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $this->validateAttributes($request, $id);

        $paymentMethod = $this->paymentMethodRepository->update($request->input('payment_method_id'), $request->all());

        return response()->json($paymentMethod, Response::HTTP_OK);
    }

    /**
     * Validation method for create and update methods.
     *
     * @param Request $request
     * @param int $id
     * @throws ValidationException
     */
    private function validateAttributes(Request $request, int $id)
    {
        $rules = [
            'active' => 'required|boolean',
        ];

        if ($id != -1) {
            $rules['payment_method_id'] = 'required|integer|exists:payment_methods,id';
        }

        $this->validate($request, $rules);
    }
}
