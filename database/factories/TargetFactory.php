<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TargetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'target_firstname' =>$this->faker->firstName(),
            'target_lastname' =>$this->faker->lastName(),
            'target_birthday'=>$this->faker->dateTimeBetween('-80 years','-20 years'),
            'nationality_id' =>$this->faker->numberBetween(1,193),
            'target_pseudo'=>$this->faker->sentence(2)
        ];
    }
}
