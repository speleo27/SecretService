<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contact_firstname' =>$this->faker->firstName(),
            'contact_lastname' =>$this->faker->lastName(),
            'contact_birthday'=>$this->faker->dateTimeBetween('-80 years','-20 years'),
            'nationality_id' =>$this->faker->numberBetween(1,193),
            'contact_pseudo'=>$this->faker->sentence(2)
        ];
    }
}
