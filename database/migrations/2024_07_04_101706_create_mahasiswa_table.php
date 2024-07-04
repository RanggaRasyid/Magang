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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->integer('nim')->primary();
            $table->string('namamhs', 255);
            $table->string('alamatmhs', 255);
            $table->string('emailmhs', 255);
            $table->string('nohpmhs', 15);
            $table->string('jeniskelamin', 255)->nullable();
            $table->string('agama', 255)->nullable();
            $table->string('tempatlahirmhs', 255);
            $table->date('tanggallahirmhs');
            $table->string('posisi', 100);
            $table->string('namauniv', 100);
            $table->string('fakultas', 100);
            $table->string('jurusan', 100);
            $table->string('foto', 255);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
