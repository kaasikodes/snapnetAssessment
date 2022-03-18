<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->words(2 , true),
            'lga_id'=> $this->faker->numberBetween(1, 4)
        ];
    }
}
