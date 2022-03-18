<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->streetName,
            'description'=> $this->faker->sentences(4, true),
            'author_id'=>$this->faker->numberBetween(1,4),
        ];
    }
}
