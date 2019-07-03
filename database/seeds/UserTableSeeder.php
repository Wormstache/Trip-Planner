<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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
    }
}
