<?php

use Illuminate\Database\Seeder;
use SON\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([        
            'email' => 'admin@user.com',
            'password' => Hash::make('123456'),
            'enrolment' => 100001
        ]);
    }
}
