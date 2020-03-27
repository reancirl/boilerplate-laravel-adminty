<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testUser = User::first();
        $testRole = Role::first();
        $testUser->roles()->attach($testRole);
    }
}
