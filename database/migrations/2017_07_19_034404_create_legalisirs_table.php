<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLegalisirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legalisir', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('nik');
            $table->string('nama');
            $table->char('jenis_kelamin', 1);
            $table->string('alamat');
            $table->char('rt', 2);
            $table->char('rw', 2);
            $table->string('kelurahan');
            $table->string('jenis_berkas');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->unsignedInteger('user_id');
        });

        Schema::table('legalisir', function($table) {
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
        Schema::dropIfExists('legalisir');
    }
}
