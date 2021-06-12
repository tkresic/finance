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
        $vat = 0;
        $taxes = [];

        foreach ($data['products'] as $product) {
            $productTotal = $product['quantity'] * $product['price'];
            $gross += $productTotal;

            $productVat = round($product['tax']['amount'] / 100 * $productTotal);
            $vat += $productVat;


            $key = array_search($product['tax']['id'], array_column($taxes, 'id'));

            if (!empty($taxes) && $key !== FALSE) {
                $taxes[$key]['total'] += $productVat;
            } else {
                $product['tax']['total'] = $productVat;
                $taxes[] = $product['tax'];
            }
        }

        $data = [
            'payment_method_id' => $data['payment_method_id'],
            'business_place_label' => $data['business_place_label'],
            'user' => $data['user'],
            'branch' => $data['branch'] ?? null,
            'products' => $data['products'],
            'number' => $number,
            'label' => $label,
            'gross' => $gross,
            'net' => $gross - $vat,
            'taxes' => $taxes,
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

        $taxes = [];

        foreach ($originalBill->taxes as $tax) {
            $tax['total'] = -$tax['total'];
            $taxes[] = $tax;
        }

        $restoredBill->restored_bill_id = $originalBill->id;
        $restoredBill->user = $data['user'];
        $restoredBill->number = $number;
        $restoredBill->label = $this->getNewBillLabel($restoredBill->business_place_label, $number);
        $restoredBill->restoring_reason = $restoringReason;
        $restoredBill->gross = -$originalBill->gross;
        $restoredBill->net = -$originalBill->net;
        $restoredBill->taxes = $taxes;
        $restoredBill->products = $products;
        $restoredBill->save();

        return $restoredBill;
    }
}
