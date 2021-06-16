<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
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
     * Payment Methods index route.
     *
     * @OA\Get(
     *      path="/api/payment-methods",
     *      description="Get all Payment Methods",
     *      tags={"Payment Methods"},
     *      @OA\Response(
     *          response="200",
     *          description="Payment Method",
     *          @OA\JsonContent()
     *      ),
     * )
     * @param Request $request
     * @return JsonResponse|ResponseFactory
     */
    public function index(Request $request)
    {
        $active = $request->input('active');

        $paymentMethods = PaymentMethod::when($active, function ($query) use ($active) {
                $query->where('active', $active);
            })
            ->get();


        return response($paymentMethods, Response::HTTP_OK);
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
        $this->validateAttributes($request);

        $paymentMethod = $this->paymentMethodRepository->find($id);

        if ($paymentMethod == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        $paymentMethod = $this->paymentMethodRepository->update($id, $request->all());

        return response()->json($paymentMethod, Response::HTTP_OK);
    }

    /**
     * Validation method for create and update methods.
     *
     * @param Request $request
     * @throws ValidationException
     */
    private function validateAttributes(Request $request)
    {
        $rules = [
            'active' => 'required|boolean',
        ];


        $this->validate($request, $rules);
    }
}
