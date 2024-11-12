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
        Schema::dropIfExists('loogbook_mahasiswa'); // This will drop the table if it exists
    }

    public function down()
    {
        // Optionally, you can add the schema to recreate the table in the 'down' method
        Schema::create('loogbook_mahasiswa', function (Blueprint $table) {
            $table->uuid('id_loogbook')->primary();
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('nama');
            $table->text('deskripsi', 255);
            $table->timestamps();
        });
    }
};
