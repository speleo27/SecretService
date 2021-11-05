<?php

namespace Database\Factories;

use App\Models\Mission;
use Illuminate\Database\Eloquent\Factories\Factory;

class MissionInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $mission=Mission::select()->inRandomOrder()->first();
        $agent=Mission::select()->inRandomOrder()->first();
        $contact=Mission::select()->inRandomOrder()->first();
        $target=Mission::select()->inRandomOrder()->first();
        return [
            "mission_id"=>$mission,
            "agent_id"=>$agent,
            "contact_id"=>$contact,
            "target_id"=>$target
            ];
    }
}
