<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TargetMissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        $data=[];

        for($i=0; $i<400;$i++){
            $data[]=array('mission_id'=>$faker->numberBetween(1,200),
                'target_id'=>$faker->numberBetween(1,100));
        }
        DB::table('missions_targets')->delete();
        $status =$data;
        DB::table('missions_targets')->insert($status);
    }
}
