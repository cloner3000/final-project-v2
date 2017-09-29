<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(KtpTableSeeder::class);
    	$this->call(KartuKeluargaTableSeeder::class);
    	$this->call(LegalisirTableSeeder::class);
    	$this->call(PindahDatangTableSeeder::class);
    	$this->call(PindahKeluarTableSeeder::class);
    }
}
