<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SafeHouseMissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[];

        for($i=0; $i<150;$i++){
            $data[]=array('mission_id'=>$this->faker->numberBetween(1,201),
                'safe_house_id'=>$this->faker->numberBetween(1,51));
        }
        DB::table('missions_safe_houses')->delete();
        $status =$data;
        DB::table('missions_safe_houses')->insert($status);

    }
}
