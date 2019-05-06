<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use App\KepalaKeluarga;
use App\Warga;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=1; $i < 30 ; $i++) { 
        	KepalaKeluarga::create([
        		'nik'=>'11223344'.$i,
        		'nama'=>$faker->name,
        		'status'=>'aktif',
        		'pekerjaan'=>'Pegulat',
        		'agama'=>'islam',
        		'alamat'=>$faker->address
        	]);
        }
    }
}	
