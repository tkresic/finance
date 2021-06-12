<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(BillsTableSeeder::class);
//        $this->call(ShiftsTableSeeder::class);
        $this->call(PaymentMethodsTableSeeder::class);
        $this->call(TaxesTableSeeder::class);
    }
}
