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
            'gross' => 100,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'email' => 'tonikresic1997@gmail.com'
            ],
            'number' => 1,
            'label' => '1-1-1'
        ]);

        Bill::create([
            'payment_method_id' => 2,
            'gross' => 200,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'email' => 'tonikresic1997@gmail.com'
            ],
            'number' => 2,
            'label' => '1-1-2'
        ]);
    }
}
