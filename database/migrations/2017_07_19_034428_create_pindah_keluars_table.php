<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePindahKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindah_keluar', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('no_kk');
            $table->bigInteger('nik');
            $table->string('nama');
            $table->char('jenis_kelamin', 1);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('kewarganegaraan', 3);
            $table->char('gol_darah', 2);
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->string('shdk');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('alamat_sekarang');
            $table->char('rt', 2);
            $table->char('rw', 2);
            $table->string('kelurahan');
            $table->string('alamat_tujuan');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->unsignedInteger('user_id');
        });

        Schema::table('pindah_keluar', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pindah_keluar');
    }
}
