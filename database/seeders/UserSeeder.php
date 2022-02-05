<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'id' => '1',
            'username' => 'admin',
            'name' => 'Ahmad Fadlli',
            'level_id' => '1',
            'email' => 'fadlya@gmail.com',
            'password' =>  Hash::make('admin2346'),
           
        ]);
    }
}
