<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class LegalisirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('legalisir')->truncate();

        $userId = DB::table('users')->pluck('id')->all();

        $faker = Faker::create();
        for ($i=1; $i <= 100; $i++){
        	$date = $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now')->format('Y-m-d H:i:s');
        	$data[] = [
        		'nik'		 	 	 => $faker->unique()->numberBetween($min = 1000, $max = 2000),
        		'nama'		 	 	 => $faker->name, 
    		    'alamat'		     => $faker->address, 
        		'rt'		 	 	 => $faker->randomDigitNotNull, 
        		'rw'		 	 	 => $faker->randomDigitNotNull,
        		'kelurahan'		 	 => $faker->randomElement($array = ['Cipaganti', 'Dago', 'Lebak Gede', 'Lebak Siliwangi', 'Sekeloa', 'Sadang Serang']),
        		'jenis_berkas'		 => $faker->randomElement($array = ['E-KTP', 'KK']),
        		'status'		 	 => 0,      
        		'created_at' 		 => $date, 
        		'updated_at' 		 => $date,
        		'user_id'			 => $faker->randomElement($userId)
        	];
        }
        DB::table('legalisir')->insert($data);
    }
}
