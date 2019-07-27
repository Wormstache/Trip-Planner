<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();

        $admin = new User();
        $admin->name = 'Rasana Shakya';
        $admin->address = 'Banasthali';
        $admin->contact_no = '9843364569';
        $admin->email = 'shakyamuskan57@gmail.com';
        $admin->password = bcrypt('wormstache');
        $admin->image = 'https://source.unsplash.com/random';
        $admin->save();
        $admin->roles()->attach($role_admin);

        $faker= Faker::create('App/User');

        for($i=1;$i<=10;$i++){
            $role_agent = Role::where('name','agent')->first();
            DB::table('users')->insert([
                'name'=>$faker->name(),
                'address'=>$faker->cityPrefix(),
                'contact_no'=>$faker->phoneNumber(),
                'email'=>$faker->email(),
                'password'=>$faker->password(),
                'image'=>$faker->imageUrl($width=640,$height=400),
                'created_at' => \Carbon\Carbon::now(),
        	    'updated_at' => \Carbon\Carbon::now(),
            ]);
            $admin->roles()->attach($role_agent);
        }
    }
}
