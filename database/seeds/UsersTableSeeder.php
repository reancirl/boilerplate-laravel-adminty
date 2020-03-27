<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = User::create([
        	'name' => 'Test Admin',
        	'email' => 'test@test.com',
        	'password' => Hash::make('password'),
        ]);
    }
}
