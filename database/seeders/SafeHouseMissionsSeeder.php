<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SafeHouseMissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        $data=[];

        for($i=0; $i<150;$i++){
            $data[]=array('mission_id'=>$faker->numberBetween(1,200),
                'safe_house_id'=>$faker->numberBetween(1,50));
        }
        DB::table('missions_safe_houses')->delete();
        $status =$data;
        DB::table('missions_safe_houses')->insert($status);

    }
}
