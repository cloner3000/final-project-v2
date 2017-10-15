<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartuKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_keluarga', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('no_kk');
            $table->bigInteger('nik');
            $table->string('nama');
            $table->char('jenis_kelamin', 1);
            $table->string('alamat');
            $table->char('rt', 2);
            $table->char('rw', 2);
            $table->string('kelurahan');
            $table->integer('jumlah_pengikut');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->unsignedInteger('user_id');
        });

        Schema::table('kartu_keluarga', function($table) {
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
        Schema::dropIfExists('kartu_keluarga');
    }
}
