<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TargetMissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[];

        for($i=0; $i<400;$i++){
            $data[]=array('mission_id'=>$this->faker->numberBetween(1,200),
                'target_id'=>$this->faker->numberBetween(1,100));
        }
        DB::table('missions_targets')->delete();
        $status =$data;
        DB::table('missions_targets')->insert($status);
    }
}
