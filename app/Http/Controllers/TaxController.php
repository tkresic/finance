<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaxCollection;
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
     * Lists all taxes.
     *
     * @return TaxCollection|Response|ResponseFactory
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

        $tax = $this->taxRepository->update($request->input('tax_id'), $request->all());

        return response()->json($tax, Response::HTTP_OK);
    }

    /**
     * Deletes the tax.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        $tax = $this->taxRepository->find($id);

        if ($tax == null) {
            return response()->json(null, Response::HTTP_NOT_FOUND);
        }

        $success = $this->taxRepository->delete($id);

        return $success ? response()->json($success, Response::HTTP_OK) : response()->json('Something went wrong', Response::HTTP_INTERNAL_SERVER_ERROR);
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
            'name' => 'required|string|max:255|unique:taxes,name,' . $id,
            'amount' => 'required|integer|between:1,100',
        ];

        if ($id != -1) {
            $rules['tax_id'] = 'required|integer|exists:taxes,id';
        }

        $this->validate($request, $rules);
    }
}
