<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name'=>'Admin',
            'user_type'=>'admin',
            'email'=>'masud.dc13@gmail.com',
            'password'=>Hash::make('admin123'),
        ]);
    }
}
