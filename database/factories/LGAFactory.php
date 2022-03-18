<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LGAFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=> $this->faker->streetName,
            'state_id'=> $this->faker->numberBetween(1, 4)
        ];
    }
}
