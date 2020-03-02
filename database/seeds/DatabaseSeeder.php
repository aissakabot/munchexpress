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
       //  $this->call(UsersTableSeeder::class);
         
    $this->call(MenusTableSeeder::class);
        \App\User::create([
            'name' => 'Ali',
            'email' => 'Ali@gmail.com',
            'password' => bcrypt('password'), 
        ]);
    }
}
