<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create('App/Blog');

        for($i=1;$i<=10;$i++){
            DB::table('blogs')->insert([
                'agent_id'=>$faker->numberBetween($min=1,$max=11),
                'title'=>$faker->sentence(),
                'description'=>$faker->paragraph(),
                'filename'=>$faker->imageUrl($width=640,$height=400),
                'created_at' => \Carbon\Carbon::now(),
        	    'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
