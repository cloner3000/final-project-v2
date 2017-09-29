<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class KartuKeluargaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kartu_keluarga')->truncate();

        $userId = DB::table('users')->pluck('id')->all();

        $faker = Faker::create();
        for ($i=1; $i <= 100; $i++){
        	$date = $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now')->format('Y-m-d H:i:s');
        	$data[] = [
                'no_kk'              => $faker->unique()->numberBetween($min = 1000, $max = 2000),
        		'nik'		 	 	 => $faker->unique()->numberBetween($min = 3000, $max = 4000),
        		'nama'		 	 	 => $faker->name,
                'jenis_kelamin'      => $faker->randomElement($array = ['L', 'P']), 
                'alamat'             => $faker->address,
                'rt'                 => $faker->randomDigitNotNull,
        		'rw'		 	 	 => $faker->randomDigitNotNull,
        		'kelurahan'		 	 => $faker->randomElement($array = ['Cipaganti', 'Dago', 'Lebak Gede', 'Lebak Siliwangi', 'Sekeloa', 'Sadang Serang']),
                'jumlah_pengikut'    => $faker->randomDigitNotNull,
        		'status'		 	 => 0,      
        		'created_at' 		 => $date, 
        		'updated_at' 		 => $date,
        		'user_id'			 => $faker->randomElement($userId)
        	];
        }
        DB::table('kartu_keluarga')->insert($data);
    }
}
