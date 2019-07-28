<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->save();

        $role_agent = new Role();
        $role_agent->name = 'agent';
        $role_agent->save();

        $role_customer = new Role();
        $role_customer->name = 'customer';
        $role_customer->save();
    }
}
