<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'=> $this->faker->uuid(),
            'agent_firstname' =>$this->faker->firstName(),
            'agent_lastname' =>$this->faker->lastName(),
            'agent_birthday'=>$this->faker->dateTimeBetween('-80 years','-20 years'),
            'nationality_id' =>$this->faker->numberBetween(1,193)
        ];
    }
}
