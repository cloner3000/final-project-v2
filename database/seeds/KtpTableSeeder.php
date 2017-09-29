<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class KtpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ktp')->truncate();

        $userId = DB::table('users')->pluck('id')->all();

        $faker = Faker::create();
        for ($i=1; $i <= 100; $i++) {
        	$date = $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now')->format('Y-m-d H:i:s');
        	$data[] = [
        		'nik'		 	 	 => $faker->unique()->numberBetween($min = 1000, $max = 2000),
        		'nama'		 	 	 => $faker->name, 
    		    'jenis_kelamin'		 => $faker->randomElement($array = ['L', 'P']),
                'tempat_lahir'       => $faker->city,
                'tanggal_lahir'      => $faker->date($format = 'Y-m-d', $max='now'),
                'kewarganegaraan'    => $faker->randomElement($array = ['WNA', 'WNI']),
                'gol_darah'          => $faker->randomElement($array = ['A', 'B', 'O', 'AB']),
                'agama'              => $faker->randomElement($array = [
                                        'Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha'
                                        ]),
                'status_perkawinan'  => $faker->randomElement($array = ['Lajang', 'Menikah']),
                'pendidikan'         => 'S1',
        		'pekerjaan'          => 'Pelajar/Mahasiswa',
                'nama_ayah'          => $faker->firstNameMale,
                'nama_ibu'           => $faker->firstNameFemale,
                'alamat'             => $faker->address,
                'rt'                 => $faker->randomDigitNotNull,
        		'rw'		 	 	 => $faker->randomDigitNotNull,
        		'kelurahan'		 	 => $faker->randomElement($array = ['Cipaganti', 'Dago', 'Lebak Gede', 'Lebak Siliwangi', 'Sekeloa', 'Sadang Serang']),
        		'status'		 	 => 0,      
        		'created_at' 		 => $date, 
        		'updated_at' 		 => $date,
        		'user_id'			 => $faker->randomElement($userId)
        	];
        }
        DB::table('ktp')->insert($data);
    }
}
