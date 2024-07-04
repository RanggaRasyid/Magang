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
            $table->dropColumn('Tempat_Lahir');
            $table->dropColumn('Tanggal_Lahir');
            $table->dropColumn('Fakultas_Jurusan');
            $table->dropColumn('Alamat');
            $table->dropColumn('Asal_Kampus');
            $table->dropColumn('Akun_Media_Sosial');
            $table->dropColumn('Nomor_Handphone');
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
