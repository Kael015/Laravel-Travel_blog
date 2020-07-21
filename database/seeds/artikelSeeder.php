<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class artikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_artikel');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 5; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('artikel')->insert([
                'id_user' => $faker->randomDigit,
                'judul_artikel' => $faker->company,
                'isi_artikel'=> $faker->text,
                'url'=> $faker->imageUrl,
        	]);
 
        }
    }
}
