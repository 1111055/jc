<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $role_employee = Role::where('name', 'employee')->first();
	    $role_manager  = Role::where('name', 'manager')->first();
	    $employee = new User();
	    $employee->name = 'Marco Mendes';
	    $employee->email = 'marcomendes0202@hotmail.com';
	    $employee->password = bcrypt('Readonly123');
	    $employee->save();
	    $employee->roles()->attach($role_employee);
	    $manager = new User();
	    $manager->name = 'Admin';
	    $manager->email = 'geral@iberobrinde.pt';
	    $manager->password = bcrypt('admin123');
	    $manager->save();
	    $manager->roles()->attach($role_manager);
    }
}
