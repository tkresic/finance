<?php

use App\Models\Bill;
use App\Repositories\BillRepository;
use Faker\Factory;

class CreateBillTest extends TestCase
{
    private \Faker\Generator $faker;
    private array $user;
    private array $branch;

    public function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();

        $this->user = [
            'id' => $this->faker->numberBetween(1,15),
            'username' => $this->faker->userName,
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'email' => $this->faker->email,
            'role' => [
                'id' => $this->faker->numberBetween(1,15),
                'name' => $this->faker->word
            ]
        ];

        $this->branch = [
            'id' => $this->faker->numberBetween(1,5),
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'businessPlaceLabel' => $this->faker->numberBetween(1,5),

        ];
    }

    /**
     * Tests Bill creation.
     *
     * @return void
     */
    public function testCreateBill()
    {
        $billRepository = app()->make(BillRepository::class);

        $products = [];

        $numberOfProducts = $this->faker->numberBetween(1,5);

        for ($i = 0; $i < $numberOfProducts; $i++) {
            $products[] = [
                'id' => $this->faker->numberBetween(1,123),
                'subcategoryId' => $this->faker->numberBetween(1,10),
                'subcategory' => [
                    'id' => $this->faker->numberBetween(1,10),
                    'active' => $this->faker->boolean,
                    'name' => $this->faker->word,
                    'categoryId' => $this->faker->numberBetween(1,10),
                    'category' => [
                        'id' => $this->faker->numberBetween(1,3),
                        'name' => $this->faker->word,
                        'active' => $this->faker->boolean
                    ]
                ],
                'name' => $this->faker->word,
                'quantity' => $this->faker->numberBetween(1,3),
                'price' => $this->faker->numberBetween(100,5000),
                'cost' => $this->faker->numberBetween(100,5000),
                'active' => $this->faker->boolean,
                'image' => $this->faker->imageUrl(),
                'tax' => [
                    'id' => $this->faker->numberBetween(1,2),
                    'name' => $this->faker->word,
                    'amount' => $this->faker->numberBetween(1,100)
                ]
            ];
        }

        $data = [
            'user' => $this->user,
            'branch' => $this->branch,
            'cashRegisterLabel' => $this->faker->numberBetween(1,10),
            'payment_method_id' => $this->faker->numberBetween(1,2),
            'products' => $products
        ];

        $bill = $billRepository->make($data);

        $this->assertInstanceOf(Bill::class, $bill);
    }
}
