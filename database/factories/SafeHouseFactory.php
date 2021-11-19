<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\SafeHouseType;
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
        $type=SafeHouseType::select()->inRandomOrder()->first();
        return [
            'safeHouse_address' =>$this->faker->streetAddress(),
            'country_id'=>$country,
            'safeHouse_type'=>$type,
            'digit'=>$this->faker->numberBetween(1000,9999)
        ];
    }
}
