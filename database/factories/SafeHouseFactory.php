<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SafeHouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $country=Country::select()->inRandomOrder()->first();
        return [
            'safeHouse_address' =>$this->faker->streetAddress(),
            'country_id'=>$country
        ];
    }
}
