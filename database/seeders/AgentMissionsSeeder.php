<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgentMissionsSeeder extends Seeder
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
                'agent_id'=>$this->faker->numberBetween(1,25));
        }
        DB::table('agents_missions')->delete();
        $status =$data;
        DB::table('agents_missions')->insert($status);
    }
}
