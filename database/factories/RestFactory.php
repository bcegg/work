<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rest_in' => $this->faker->time(),
            'rest_out' => $this->faker->time()
        ];
    }
}
