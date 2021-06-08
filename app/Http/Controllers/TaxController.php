<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaxCollection;
use App\Repositories\TaxRepository;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;

class TaxController extends Controller
{
    private TaxRepository $taxRepository;

    public function __construct(TaxRepository $taxRepository)
    {
        $this->taxRepository = $taxRepository;
    }

    /**
     * Lists all Taxs.
     *
     * @return TaxCollection|Response|ResponseFactory
     */
    public function index()
    {
        return response($this->taxRepository->all(), Response::HTTP_OK);
    }
}
