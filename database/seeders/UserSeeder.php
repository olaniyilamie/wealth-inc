<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //

        DB::table('users')->insert([
            'name'  => 'Free User',
            'email'  => 'free_user@gmail.com',
            'password'  => Hash::make('free_user'),
            'role'  => 'free_user',
            'created_at'  => date('y-m-d h:i:s'),
            'updated_at'  => date('y-m-d h:i:s'),
            'email_verified_at'  => date('y-m-d h:i:s'),
        ]);
    
        DB::table('users')->insert([
            'name'  => 'Paid User',
            'email'  => 'paid_user@gmail.com',
            'password'  => Hash::make('paid_user'),
            'role'  => 'paid_user',
            'created_at'  => date('y-m-d h:i:s'),
            'updated_at'  => date('y-m-d h:i:s'),
            'email_verified_at'  => date('y-m-d h:i:s'),
        ]);
    }
}