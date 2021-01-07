<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        DB::table('users')->insert([
        'email' => '17081010105@student.upnjatim.ac.id',
        'roles' => 'mahasiswatf',
        'password' => Hash::make($faker->numberBetween(10000000, 99999999)),
    ]);

    }
}
