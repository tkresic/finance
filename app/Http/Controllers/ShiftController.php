<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShiftCollection;
use App\Models\Subcategory;
use App\Repositories\ShiftRepository;
use App\Traits\ModelTrait;
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
     * Lists all Shifts.
     *
     * @return ShiftCollection|Response|ResponseFactory
     */
    public function index()
    {
        return response($this->shiftRepository->all(), Response::HTTP_OK);
    }
}
