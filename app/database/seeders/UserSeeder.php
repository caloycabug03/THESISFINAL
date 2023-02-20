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
      
        // role legends 0=superadmin  1=frontdesk 2=manager 3=housekeeping 4=school accountant

        DB::table('users')->insert([
            'name' =>'Front desk Department',
            'email' =>'frontdesk'.'@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'Front Desk',

        ]);

        DB::table('users')->insert([
            'name' =>'Manager Department ',
            'email' =>'manager'.'@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'Manager',

        ]);

        DB::table('users')->insert([
            'name' =>'School Accountant',
            'email' =>'schoolaccountant'.'@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'School Accountant',
        ]);

        DB::table('users')->insert([
            'name' =>'Housekeeping Department',
            'email' =>'housekeeping'.'@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'Housekeeping',

        ]);

        DB::table('users')->insert([
            'name' =>'Rodinel Bergado',
            'email' =>'rodinelbergado'.'@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'Super Admin',

        ]);
    }
}
