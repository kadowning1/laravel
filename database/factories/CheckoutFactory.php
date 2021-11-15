<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CheckoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->name,
            'checked_out' => $this->faker->sentence,
            'return_date' => (string)$this->faker->date,
        ];
    }
}
