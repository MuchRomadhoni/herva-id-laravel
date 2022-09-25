<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin Herva ID',
            'password' => bcrypt('herva123'),
            'email' => 'hervaid.com@gmail.com',
        ]);
    }
}
