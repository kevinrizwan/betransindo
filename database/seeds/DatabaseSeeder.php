<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'    => "agen X",
            'username'    => 'staff',
            'role'    => 'staff',
            'password'    => bcrypt('123456'),
        ]);
        \App\User::create([
            'name'    => "Penonton",
            'username'    => 'penonton',
            'role'    => 'penonton',
            'password'    => bcrypt('123456'),
        ]);
    }
}
