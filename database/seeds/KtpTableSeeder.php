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

        $nama_depan = [
            'Agustian', 
            'Andini', 
            'Dera', 
            'Saeful', 
            'Rahman', 
            'Handi', 
            'Jajang', 
            'Nadia', 
            'Fitri',
            'Deni',
            'Fagi',
            'Dwivo',
            'Aldy',
            'Dendi',
        ];

        $nama_belakang = [
            'Andiawan', 
            'Andaruka', 
            'Elmiawan', 
            'Khairunnisa', 
            'Rahayu', 
            'Maulana', 
            'Tri Dharma', 
            'Raharja', 
            'Brotolaras',
            'Hidayat',
            'Mahardhika',
            'Tri Wibisana',
            'Prayudha',
            'Subagja',
        ];

        $alamat = [
            'Puyuh Dalam I',
            'Puyuh Dalam II',
            'Puyuh Dalam III',
            'Sekemirung',
            'Reuma Kidul',
            'Panyileukan',
            'Gagak',
            'Bondol',
            'Tikukur',
            'Merak',
            'Sekeloa',
            'Dipatiukur',
            'Panatayuda',
            'Dago Kulon',
            'Bangbayang'
        ];

        $faker = Faker::create();
        for ($i=1; $i <= 2000; $i++) {
        	$date = $faker->dateTimeBetween($startDate = '-1095 days', $endDate = 'now')->format('Y-m-d H:i:s');
        	$data[] = [
        		'nik'		 	 	 => $faker->unique()->numberBetween($min = 3273020101010001, $max = 3273020101019999),
        		'nama'		 	 	 => $faker->randomElement($array = $nama_depan) . ' ' . $faker->randomElement($array = $nama_belakang),
    		    'jenis_kelamin'		 => $faker->randomElement($array = ['L', 'P']),
                'tempat_lahir'       => $faker->randomElement($array = ['Bandung', 'Jakarta', 'Subang', 'Pangkalpinang', 'Bangkalan', 'Garut', 'Kuningan', 'Tasikmalaya', 'Semarang', 'Palu']),
                'tanggal_lahir'      => $faker->date($format = 'Y-m-d', $max='now'),
                'kewarganegaraan'    => $faker->randomElement($array = ['WNA', 'WNI']),
                'gol_darah'          => $faker->randomElement($array = ['A', 'B', 'O', 'AB']),
                'agama'              => $faker->randomElement($array = [
                                        'Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha'
                                        ]),
                'status_perkawinan'  => $faker->randomElement($array = ['Lajang', 'Menikah']),
                'pendidikan'         => $faker->randomElement($array = ['Tidak/Belum Sekolah', 'SD', 'SMP', 'SMA', 'S1', 'S2', 'S3']),
        		'pekerjaan'          => $faker->randomElement($array = 
                                        [
                                        'Belum/Tidak Bekerja',
                                        'Mengurus Rumah Tangga',
                                        'Pelajar/Mahasiswa',
                                        'Pensiunan',
                                        'Pegawai Negeri Sipil (PNS)',
                                        'Tentara Nasional Indonesia',
                                        'Kepolisian RI',
                                        'Perdagangan',
                                        'Karyawan Swasta',
                                        'Karyawan BUMN',
                                        'Guru',
                                        'Dosen',
                                        'Dokter',
                                        'Wiraswasta',
                                        'Buruh Harian Lepas'
                                        ]),
                'nama_ayah'          => $faker->randomElement($array = $nama_depan) . ' ' . $faker->randomElement($array = $nama_belakang),
                'nama_ibu'           => $faker->randomElement($array = $nama_depan) . ' ' . $faker->randomElement($array = $nama_belakang),
                'alamat'             => 'Jl. ' . $faker->randomElement($array = $alamat) . ' No. ' . $faker->randomDigitNotNull,
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
