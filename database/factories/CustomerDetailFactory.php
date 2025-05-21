<?php

namespace Database\Factories;

use App\Models\CustomerDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerDetail>
 */
class CustomerDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CustomerDetail::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'address' => $this->faker->address,
            'postal_code' => $this->faker->postcode,
            'subscribed_email' => $this->faker->randomElement([0, 1]),
            'subscribed_sms' => $this->faker->randomElement([0, 1]),
            'enabled_push' => $this->faker->randomElement([0, 1]),
            'type' => $this->faker->randomElement(['regular', 'premium']),
        ];
    }
}
