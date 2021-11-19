<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ContactMissionsSeeder extends Seeder
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

        for($i=0; $i<400;$i++){
            $data[]=array('mission_id'=>$faker->numberBetween(1,200),
                'contact_id'=>$faker->numberBetween(1,100));
        }
        DB::table('contacts_missions')->delete();
        $status =$data;
        DB::table('contacts_missions')->insert($status);

    }
}
