<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Speciality;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgentSpecialitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $speciality=Speciality::select()->inRandomOrder()->first();
        $agent=Agent::select()->inRandomOrder()->first();
        return [
            "agent_id"=>$agent->id,
            "speciality_id"=>$speciality->id
        ];
    }
}
