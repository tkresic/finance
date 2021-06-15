<?php

namespace App\Http\Controllers;

use App\Http\Resources\BillCollection;
use App\Repositories\BillRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;

class BillController extends Controller
{
    private BillRepository $billRepository;

    public function __construct(BillRepository $billRepository)
    {
        $this->billRepository = $billRepository;
    }

    /**
     * Lists all bills.
     *
     * @return BillCollection|Response|ResponseFactory
     */
    public function index()
    {
        return response($this->billRepository->all(['paymentMethod', 'restoredBill', 'restoredByBill']), Response::HTTP_OK);
    }

    /**
     * Creates new bill.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     * @throws GuzzleException
     */
    public function create(Request $request): JsonResponse
    {
        $this->validateAttributes($request);

        $data = $request->all();

        $client = new Client();
        $response = $client->request('GET', config('services.corporate') . '/api/cash-registers/' . $data['cash_register_id']);
        $cashRegister = json_decode($response->getBody()->getContents(), true);

        if ($cashRegister == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        $data['branch'] = $cashRegister['branch'];
        $data['cashRegisterLabel'] = $cashRegister['label'];

        $bill = $this->billRepository->make($data);

        return response()->json($bill, Response::HTTP_OK);
    }

    /**
     * Updates the bill.
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $this->validateAttributes($request, $id);

        $originalBill = $this->billRepository->find($id);

        if ($originalBill == null) {
            return response()->json(false, Response::HTTP_NOT_FOUND);
        }

        if ($originalBill->restored_bill_id) {
            return response()->json(['bill' => ['Račun je već storniran']], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $bill = $this->billRepository->restore($originalBill, $request->all(), $request->input('restoring_reason'));

        return response()->json($bill, Response::HTTP_OK);
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
        if ($id == -1) {
            $rules = [
                'user' => 'required|array',
                'user.id' => 'required|integer',
                'user.name' => 'required|string|max:255',
                'user.username' => 'required|string|max:255',
                'cash_register_id' => 'required|integer|min:1',
                'payment_method_id' => 'required|integer|exists:payment_methods,id',
                'products' => 'required|array',
                'products.*.id' => 'required|integer',
                'products.*.price' => 'required|integer|min:1',
                'products.*.name' => 'required|string|max:255',
                'products.*.quantity' => 'required|integer|min:1',
                'products.*.tax' => 'required|array',
                'products.*.tax.id' => 'required|integer',
                'products.*.tax.name' => 'required|string',
                'products.*.tax.amount' => 'required|integer|between:1,100',
            ];
        } else {
            $rules = [
                'user' => 'required|array',
                'user.id' => 'required|integer',
                'user.name' => 'required|string|max:255',
                'user.username' => 'required|string|max:255',
                'restoring_reason' => 'required|string|max:255',
            ];
        }

        $this->validate($request, $rules);
    }
}
