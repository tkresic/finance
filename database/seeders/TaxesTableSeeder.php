<?php

namespace Database\Seeders;

use App\Models\Tax;
use Illuminate\Database\Seeder;

class TaxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tax::create([
            'name' => 'PDV 25%',
            'amount' => 25
        ]);

        Tax::create([
            'name' => 'PDV 10%',
            'amount' => 10
        ]);
    }
}
