<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\MissionInfo;
use App\Models\MissionTypes;
use App\Models\Speciality;
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
        $speciality=Speciality::select()->inRandomOrder()->first();
        $dateDeDebut=$this->faker->dateTimeBetween('- 2 years', 'now');
        $dateDeFin=$this->faker->dateTimeBetween('-1 year','+3 years');
        return [
            "title"=> $this->faker->sentence(4),
            "description"=>$this->faker->text(50),
            "mission_pseudo"=>$this->faker->sentence(2),
            "country_id"=>$country,
            "type_id"=>$missionType,
            "status_id"=>$status,
            "speciality_id"=>$speciality,
            "date_de_debut"=>$dateDeDebut,
            "date_de_fin"=>$dateDeFin

        ];
    }
}
