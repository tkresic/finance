<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShiftCollection;
use App\Repositories\ShiftRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class ShiftController extends Controller
{
    private ShiftRepository $shiftRepository;

    public function __construct(ShiftRepository $shiftRepository)
    {
        $this->shiftRepository = $shiftRepository;
    }

    /**
     * Lists all shifts.
     *
     * @return ShiftCollection|Response|ResponseFactory
     */
    public function index()
    {
        return response($this->shiftRepository->all(), Response::HTTP_OK);
    }

    /**
     * Creates new shift.
     *
     * @param Request $request
     * @return Response|ResponseFactory
     * @throws ValidationException
     */
    public function create(Request $request)
    {
        $this->validateAttributes($request);

        $data = [
            'user' => $request->input('user'),
            'start' => $request->input('start')
        ];

        $shift = $this->shiftRepository->create($data);

        return response($shift, Response::HTTP_OK);
    }

    /**
     * Updates the shift.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $this->validateAttributes($request, $id);

        $shift = $this->shiftRepository->find($id);

        if ($shift == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }


        if ($shift->end) {
            return response()->json(['end' => ['Shift has already ended.']], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $data = [
            'end' => $request->input('end'),
            'gross' => $request->input('gross')
        ];

        $shift = $this->shiftRepository->update($id, $data);

        return response()->json($shift, Response::HTTP_OK);
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
            'user' => 'required|array',
            'user.id' => 'required|integer',
            'user.name' => 'required|string|max:255',
            'user.username' => 'required|string|max:255',
        ];

        if ($id != -1) {
            $rules['end'] = 'required|date_format:Y-m-d H:i:s';
            $rules['gross'] = 'required|integer';
        } else {
            $rules['start'] = 'required|date_format:Y-m-d H:i:s';
        }

        $this->validate($request, $rules);
    }
}
