<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class pklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i <=9 ; $i++) { 
            DB::table('pkl')->insert([
                'nama'=> $faker->name,
                'npm' => '1808101000'.$i,
                'jabatan' => 'anggota',
                'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'instansi' => $faker->company,
                'angkatan' => '2018',
                'jurusan'=>'Informatika',
                'pembimbing'=>'pak basuki'
        
        ]);
    }
}
}

