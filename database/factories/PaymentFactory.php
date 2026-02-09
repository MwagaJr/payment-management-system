<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'control_no' => '98'.$this->faker->unique()->randomNumber(8),
            'amount' => $this->faker->randomFloat(2, 1000, 500000),
            'status' => $this->faker->randomElement(['PAID','PENDING']),
            'payer_name' => $this->faker->name,
            'payer_phone' => '07'.$this->faker->randomNumber(8),
            'paid_at' => now(),
        ];
    }

}
