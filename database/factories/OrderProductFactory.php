<?php

namespace Database\Factories;

use App\OrderProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = $this->faker->randomFloat(2, 50, 500);
        $count = $this->faker->numberBetween(1, 100);

        return [
            'product_id' => $this->faker->numberBetween(1, 100),
            'count' => $count,
            'item_price' => $price,
            'total' => $price * $count,
        ];
    }
}
