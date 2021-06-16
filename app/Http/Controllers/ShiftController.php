<?php

namespace App\Http\Controllers;

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
     * Shifts index route.
     *
     * @OA\Get(
     *      path="/api/shifts",
     *      description="Get all Shifts",
     *      tags={"Shifts"},
     *      @OA\Response(
     *          response="200",
     *          description="Shift",
     *          @OA\JsonContent()
     *      ),
     * )
     * @return JsonResponse|ResponseFactory
     */
    public function index()
    {
        return response($this->shiftRepository->all(), Response::HTTP_OK);
    }

    /**
     * Creates new shift.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function create(Request $request): JsonResponse
    {
        $this->validateAttributes($request);


        $shift = $this->shiftRepository->latest();

        if ($shift && !$shift->end) {
            return response()->json(['end' => ['Zadnja smjena nije završila']], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $data = [
            'user' => $request->input('user'),
            'start' => $request->input('start')
        ];

        $shift = $this->shiftRepository->create($data);

        return response()->json($shift, Response::HTTP_OK);
    }


    /**
     * Gets last unfinished shift.
     *
     * @return JsonResponse
     */
    public function latest(): JsonResponse
    {
        $shift = $this->shiftRepository->latest();

        if ($shift == null || $shift->end) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }


        return response()->json($shift, Response::HTTP_OK);
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
            return response()->json(['end' => ['Smjena je već gotova']], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $data = [
            'end' => $request->input('end'),
            'gross' => $this->shiftRepository->calculateGross($shift->start, $request->input('end'))
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
        } else {
            $rules['start'] = 'required|date_format:Y-m-d H:i:s';
        }

        $this->validate($request, $rules);
    }
}
