<?php

namespace Database\Seeders;

use App\Models\Bill;
use Illuminate\Database\Seeder;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bill::create([
            'payment_method_id' => 1,
            'business_place_label' => 1,
            'gross' => 100,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'username' => 'tkresic'
            ],
            'branch' => [
                'id' => 1,
                'name' => 'Avenue Mall',
            ],
            'products' => [
                [
                    'id' => 1,
                    'quantity' => 2,
                    'price' => 100,
                    'name' => 'Ramstek'
                ]
            ],
            'number' => 1,
            'label' => '1-1-1'
        ]);

        Bill::create([
            'payment_method_id' => 2,
            'business_place_label' => 1,
            'gross' => 200,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'username' => 'tkresic'
            ],
            'branch' => [
                'id' => 1,
                'name' => 'Avenue Mall',
            ],
            'products' => [
                [
                    'id' => 1,
                    'quantity' => 2,
                    'price' => 100,
                    'name' => 'Ramstek'
                ]
            ],
            'number' => 2,
            'label' => '1-1-2'
        ]);
    }
}
