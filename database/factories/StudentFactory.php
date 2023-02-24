<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "age"=>$this->faker->numberBetween(18,30),
            "address"=>$this->faker->address,
            "telephone"=>$this->faker->phoneNumber,
        ];
    }
}
