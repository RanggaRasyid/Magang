<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('Tempat_Lahir')->nullable();
            $table->date('Tanggal_Lahir')->nullable();
            $table->string('Fakultas_Jurusan')->nullable();
            $table->string('Alamat')->nullable();
            $table->string('Asal_Kampus')->nullable();
            $table->string('Akun_Media_Sosial')->nullable();
            $table->integer('Nomor_Handphone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
