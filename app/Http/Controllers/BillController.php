<?php

namespace App\Http\Controllers;

use App\Http\Resources\BillCollection;
use App\Repositories\BillRepository;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;

class BillController extends Controller
{
    private BillRepository $billRepository;

    public function __construct(BillRepository $billRepository)
    {
        $this->billRepository = $billRepository;
    }

    /**
     * Lists all Bills.
     *
     * @return BillCollection|Response|ResponseFactory
     */
    public function index()
    {
        return response($this->billRepository->all(), Response::HTTP_OK);
    }
}
