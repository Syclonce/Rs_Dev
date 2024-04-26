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
      Schema::create('rs_antrian_poli_max_by_dokter', function (Blueprint $table) {
        $table->id();
        $table->string('id_dokter'); // Creates 'nama' column of type string
        $table->string('hari'); // Creates 'nama' column of type string
        $table->time('jam_start'); // Creates 'nama' column of type string
        $table->time('jam_end'); // Creates 'nama' column of type string
        $table->string('jenis_pasien'); // Creates 'nama' column of type string
        $table->string('jumlah_pasien'); // Creates 'nama' column of type string
       
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
