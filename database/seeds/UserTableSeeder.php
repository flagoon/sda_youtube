<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_normal_user = Role::where('name', 'normal_user')->first();
        $role_admin  = Role::where('name', 'admin')->first();

        $normal_user = new User();
        $normal_user->name = 'Zenek Wiaderko';
        $normal_user->email = 'zenek@dupa.pl';
        $normal_user->password = bcrypt('dupa');
        $normal_user->save();
        $normal_user->roles()->attach($role_normal_user);

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
