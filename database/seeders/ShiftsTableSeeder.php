<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Seeder;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shift::create([
            'gross' => 6215,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'email' => 'tonikresic1997@gmail.com'
            ],
            'start' => '2021-06-16 12:00:00',
            'end' => '2021-06-16 18:00:00'
        ]);

        Shift::create([
            'gross' => 5216,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'email' => 'tonikresic1997@gmail.com'
            ],
            'start' => '2021-06-17 12:00:00',
            'end' => '2021-06-17 18:00:00'
        ]);

        Shift::create([
            'gross' => 1289,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'email' => 'tonikresic1997@gmail.com'
            ],
            'start' => '2021-06-18 12:00:00',
            'end' => '2021-06-18 18:00:00'
        ]);

        Shift::create([
            'gross' => 6215,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'email' => 'tonikresic1997@gmail.com'
            ],
            'start' => '2021-06-19 12:00:00',
            'end' => '2021-06-19 18:00:00'
        ]);

        Shift::create([
            'gross' => 1282,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'email' => 'tonikresic1997@gmail.com'
            ],
            'start' => '2021-06-20 12:00:00',
            'end' => '2021-06-20 18:00:00'
        ]);

        Shift::create([
            'gross' => 6215,
            'user' => [
                'id' => 1,
                'name' => 'Toni Krešić',
                'email' => 'tonikresic1997@gmail.com'
            ],
            'start' => '2021-06-20 12:00:00',
            'end' => '2021-06-20 18:00:00'
        ]);
    }
}
