<?php

namespace Database\Factories;

use App\Models\MissionInfo;
use App\Models\MissionTypes;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class MissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $country =Country::select()->inRandomOrder()->first();
        $missionType =MissionTypes::select()->inRandomOrder()->first();
        $status= Status::select()->inRandomOrder()->first();
        $missionInfo=MissionInfo::select()->inRandomOrder()->first();
        return [
            "title"=> $this->faker->sentence(4),
            "description"=>$this->faker->text(50),
            "country_id"=>$country,
            "missionType_id"=>$missionType,
            "status_id"=>$status,
            "missionInfo"=>$missionInfo
        ];
    }
}
