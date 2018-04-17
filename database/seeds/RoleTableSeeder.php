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
        // this creates normal user role
        $role_employee = new Role();
        $role_employee->name = 'normal_user';
        $role_employee->description = 'Normal user';
        $role_employee->save();

        // this creates admin role
        $role_manager = new Role();
        $role_manager->name = 'admin';
        $role_manager->description = 'Big bad admin';
        $role_manager->save();
    }
}
