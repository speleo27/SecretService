<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Contact;
use App\Models\Mission;
use App\Models\Target;
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
        $agent=Agent::select()->inRandomOrder()->first();
        $contact=Contact::select()->inRandomOrder()->first();
        $target=Target::select()->inRandomOrder()->first();
        return [
            "mission_id"=>$mission,
            "agent_id"=>$agent,
            "contact_id"=>$contact,
            "target_id"=>$target
            ];
    }
}
