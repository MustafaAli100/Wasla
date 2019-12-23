<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::create([
            'name' => 'Adminstrator',
            'display_name' => 'Adminstrator',
            'description' => 'controlls all the app'
        ]);
        \App\Role::create([
            'name' => 'ProjectOwner',
            'display_name' => 'ProjectOwner',
            'description' => 'make offers and except prgrammers'
        ]);
        \App\Role::create([
            'name' => 'Programmer',
            'display_name' => 'Programmer',
            'description' => 'Freelancer'
        ]);
        \App\Role::create([
            'name' => 'Company',
            'display_name' => 'Copmany',
            'description' => 'Freelancer Company'
        ]);
    }
}
