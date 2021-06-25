<?php

namespace App\Http\Controllers;

use App\Repositories\BillRepository;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;

class AnalyticController extends Controller
{
    private BillRepository $billRepository;

    public function __construct(BillRepository $billRepository)
    {
        $this->billRepository = $billRepository;
    }

    /**
     * Analytics route.
     *
     * @OA\Get(
     *      path="/api/analytics",
     *      description="Get analytics data",
     *      tags={"Analytics"},
     *      @OA\Response(
     *          response="200",
     *          description="Analytics",
     *          @OA\JsonContent()
     *      ),
     * )
     * @return JsonResponse|ResponseFactory
     */
    public function index()
    {
        $dates = $this->billRepository
            ->all([], ['created_at', 'ASC'])
            ->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('d.m.Y');
            });

        $income = [];
        $quantities = [];
        $sales = [];

        foreach ($dates as $date => $bills) {
            foreach ($bills as $bill) {
                foreach ($bill->products as $product) {
                    if (array_key_exists($date, $income)) {
                        $income[$date] += round(($product['quantity'] * $product['price'] / 100), 2);
                    } else {
                        $income[$date] = round($product['quantity'] * $product['price'] / 100, 2);
                    }

                    if (array_key_exists($product['name'], $quantities)) {
                        $quantities[$product['name']] += $product['quantity'];
                        $sales[$product['name']] += round(($product['quantity'] * $product['price'] / 100), 2);
                    } else {
                        $quantities[$product['name']] = $product['quantity'];
                        $sales[$product['name']] = round($product['quantity'] * $product['price'] / 100, 2);
                    }
                }
            }
        }

        arsort($quantities);
        $quantities = array_slice($quantities, 0, 5, true);

        arsort($sales);
        $sales = array_slice($sales, 0, 5, true);

        return response()->json([
            'income' => $income,
            'quantities' => $quantities,
            'sales' => $sales
        ], Response::HTTP_OK);
    }
}
