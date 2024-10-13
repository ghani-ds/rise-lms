<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'username' => 'ghani_dev',
                'email' => 'engr.abdullahghani@gmail.com',
                'password' => Hash::make('Pass@123'),
                'role' => 'admin',
                'status' => '1',
                'phone' => '923008108534',
                'address' => 'Lahore, Pakistan'
            ],
             // Instructor
            [
            'name' => 'ZahidQavi',
            'username' => 'zahid_qavi',
            'email' => 'zahidqavi@gmail.com',
            'password' => Hash::make('Pass@123'),
            'role' => 'instructor',
            'status' => '1',
            'phone' => '923008108534',
            'address' => 'Lahore, Pakistan'
        ],
   // Admin
            [
                'name' => 'Anzar',
                'username' => 'anzar_zahid',
                'email' => 'zahidanzar@gmail.com',
                'password' => Hash::make('Pass@123'),
                'role' => 'user',
                'status' => '1',
                'phone' => '923008108534',
                'address' => 'Lahore, Pakistan'
            ],

        ]);
    }
}
