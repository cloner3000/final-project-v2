<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ktp', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('nik')->unique();
            $table->string('nama');
            $table->char('jenis_kelamin', 1);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->char('kewarganegaraan', 3);
            $table->char('gol_darah', 2);
            $table->string('agama');
            $table->string('status_perkawinan');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat');
            $table->char('rt', 2);
            $table->char('rw', 2);
            $table->string('kelurahan');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->unsignedInteger('user_id');
        });

        Schema::table('ktp', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ktp');
    }
}
