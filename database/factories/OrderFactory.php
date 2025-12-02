<?php

namespace Database\Factories;

use App\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total' => $this->faker->numberBetween(20, 1000),
            'payment_type' => $this->faker->randomElement(['Cash', 'Online']),
            'payment_status' => $this->faker->randomElement(['Paid', 'Waiting']),
            'status' => $this->faker->randomElement(['Waiting', 'Processing', 'Delivered', 'Canceled', 'Rejected']),
        ];
    }
}
