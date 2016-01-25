<?php

use Paravel\Database\DB;
use Paravel\Database\Seeder;
use Paravel\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create(['username' => 'UserA', 'password' => Hash::make('1234')]);
    }
}