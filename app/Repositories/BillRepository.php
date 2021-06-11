<?php

namespace App\Repositories;

use App\Models\Bill;

class BillRepository extends ModelRepository
{
    public function __construct(Bill $bill)
    {
        parent::__construct($bill);
    }

    /**
     * Calculates new bill number.
     *
     * @return int
     */
    public function getNewBillNumber(): int {
        $lastBill = $this->model->orderBy('number', 'DESC')->first();
        return $lastBill ? $lastBill->number + 1 : 1;
    }

    /**
     * Formats new bill label.
     *
     * @param int $businessPlaceLabel
     * @param $number
     * @return string
     */
    public function getNewBillLabel(int $businessPlaceLabel, $number): string {
        return "$businessPlaceLabel-1-$number";
    }

    /**
     * Creates new bill.
     *
     * @param array $data
     * @return mixed
     */
    public function make(array $data): Bill
    {
        $number = $this->getNewBillNumber();

        $label = $this->getNewBillLabel($data['business_place_label'], $number);

        $gross = 0;

        // TODO => Calculate tax for each product. Each product should have taxes field in the shop ms.
        foreach ($data['products'] as $product) {
            $gross += $product['quantity'] * $product['price'];
        }

        $data = [
            'payment_method_id' => $data['payment_method_id'],
            'business_place_label' => $data['business_place_label'],
            'user' => $data['user'],
            'branch' => $data['branch'] ?? null,
            'products' => $data['products'],
            'number' => $number,
            'label' => $label,
            'gross' => $gross
        ];

        return $this->create($data);
    }

    /**
     * Restores a bill.
     *
     * @param Bill $originalBill
     * @param array $data
     * @param string $restoringReason
     * @return Bill
     */
    public function restore(Bill $originalBill, array $data, string $restoringReason): Bill
    {
        $restoredBill = $originalBill->replicate(['user',  'number', 'label']);

        $number = $this->getNewBillNumber();

        $products = [];

        foreach ($originalBill->products as $product) {
            $product['price'] = -$product['price'];
            $products[] = $product;
        }

        $restoredBill->restored_bill_id = $originalBill->id;
        $restoredBill->user = $data['user'];
        $restoredBill->number = $number;
        $restoredBill->label = $this->getNewBillLabel($restoredBill->business_place_label, $number);
        $restoredBill->restoring_reason = $restoringReason;
        $restoredBill->gross = -$originalBill->gross;
        $restoredBill->products = $products;
        $restoredBill->save();

        return $restoredBill;
    }
}
