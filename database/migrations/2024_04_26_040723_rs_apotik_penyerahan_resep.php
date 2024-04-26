<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
      Schema::create('rs_apotik_penyerahan_resep', function (Blueprint $table) {
        $table->id();
        $table->string('id_penyerahan'); // Creates 'nama' column of type string
        $table->integer('no_resep_transaksi_apotik'); // Creates 'nama' column of type string
        $table->string('ubl_or_lunas'); // Creates 'nama' column of type string
        $table->string('no_faktur_if_lunas'); // Creates 'nama' column of type string
        $table->date('tanggaltgl_diserahkan'); // Creates 'nama' column of type string
        $table->time('jam_diserahkan'); // Creates 'nama' column of type string
        $table->string('user_id'); // Creates 'nama' column of type string
        $table->string('nama_penerima'); // Creates 'nama' column of type string
        $table->string('ttd_penerima'); // Creates 'nama' column of type string
       

        $table->timestamps(); // Creates 'created_at' and 'updated_at' columns for timestamps
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
