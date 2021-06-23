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
            'gross' => 152500,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-01 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-01 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 225800,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-02 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-02 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 116291,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-03 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-03 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 310620,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-04 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-04 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 261900,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-05 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-05 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 182000,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-06 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-06 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 162700,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-07 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-07 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 221150,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-08 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-08 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 282150,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-09 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-09 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 172100,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-10 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-10 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 215000,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-11 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-11 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 172100,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-12 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-12 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 326700,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-13 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-13 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 295050,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-14 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-14 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 267100,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-15 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-15 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 167500,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-16 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-16 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 527100,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-17 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-17 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 421600,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-18 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-18 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 162700,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-19 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-19 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 216200,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-20 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-20 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);
        Shift::create([
            'gross' => 272500,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-21 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-21 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

        Shift::create([
            'gross' => 226800,
            'user' => [
                'id' => 1,
                'username' => 'tkresic',
                'name' => 'Toni',
                'surname' => 'Krešić',
                'email' => 'tonikresic1997@gmail.com',
                'role' => [
                    'id' => 1,
                    'name' => 'Administrator'
                ]
            ],
            'start' => '2021-06-22 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 11:55:00'), strtotime('2021-06-12 12:05:00'))),
            'end' => '2021-06-22 ' . date('H:i:s', mt_rand(strtotime('2021-06-12 17:55:00'), strtotime('2021-06-12 18:05:00'))),
        ]);

    }
}
