<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
            'name' =>'front desk',
            'email' =>'frontdesk'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' =>'Manager ',
            'email' =>'manager'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' =>'school accountant',
            'email' =>'schoolaccountant'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' =>'housekeeping',
            'email' =>'housekeeping'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' =>'Rodinel Bergado',
            'email' =>'bergado'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
