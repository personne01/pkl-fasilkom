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
        //$this->call("DetailUsersSeeder");
        $this->call("AdminSeeder");
        // $this->call(UsersTableSeeder::class);
    }
}
