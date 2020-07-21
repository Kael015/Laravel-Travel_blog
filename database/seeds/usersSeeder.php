<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_user');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('user')->insert([
                'nama' => $faker->name,
                'email' => $faker->email,
                'password'=> $faker->password,
        	]);
 
        }
    }
}
