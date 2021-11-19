<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactMissionsSeeder extends Seeder
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
                'contact_id'=>$this->faker->numberBetween(1,100));
        }
        DB::table('contacts_missions')->delete();
        $status =$data;
        DB::table('contacts_missions')->insert($status);

    }
}
