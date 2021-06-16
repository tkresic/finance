<?php

namespace App\Http\Controllers;

use App\Repositories\TaxRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class TaxController extends Controller
{
    private TaxRepository $taxRepository;

    public function __construct(TaxRepository $taxRepository)
    {
        $this->taxRepository = $taxRepository;
    }

    /**
     * Taxes index route.
     *
     * @OA\Get(
     *      path="/api/taxes",
     *      description="Get all Taxes",
     *      tags={"Taxes"},
     *      @OA\Response(
     *          response="200",
     *          description="Tax",
     *          @OA\JsonContent()
     *      ),
     * )
     * @return JsonResponse|ResponseFactory
     */
    public function index()
    {
        return response($this->taxRepository->all(), Response::HTTP_OK);
    }


    /**
     * Creates new tax.
     *
     * @param Request $request
     * @return Response|ResponseFactory
     * @throws ValidationException
     */
    public function create(Request $request)
    {
        $this->validateAttributes($request);

        $tax = $this->taxRepository->create($request->all());

        return response($tax, Response::HTTP_OK);
    }

    /**
     * Updates the tax.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $this->validateAttributes($request, $id);

        $tax = $this->taxRepository->find($id);

        if ($tax == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        $tax = $this->taxRepository->update($id, $request->all());

        return response()->json($tax, Response::HTTP_OK);
    }

    /**
     * Validation method for create and update methods.
     *
     * @param Request $request
     * @param int $id
     * @throws ValidationException
     */
    private function validateAttributes(Request $request, int $id = -1)
    {
        $rules = [
            'name' => "required|string|max:255|unique:taxes,name,$id",
            'amount' => 'required|integer|between:1,100',
        ];


        $this->validate($request, $rules);
    }
}
