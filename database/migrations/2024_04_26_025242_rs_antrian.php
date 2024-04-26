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
        Schema::create('rs_antrian', function (Blueprint $table) {
            $table->id();
            $table->string('no_urut'); // Creates 'nama' column of type string
            $table->string('id_pasien'); // Creates 'nama' column of type string
            $table->string('poli'); // Creates 'nama' column of type string
            $table->date('tanggal'); // Creates 'nama' column of type string
            $table->time('jam'); // Creates 'nama' column of type string
            $table->string('status'); // Creates 'nama' column of type string
            $table->string('id_user_entry'); // Creates 'nama' column of type string
            $table->string('nama_dokter'); // Creates 'nama' column of type string
            $table->string('no_ref_upf'); // Creates 'nama' column of type string
            $table->string('isSudahUpload_diJKN'); // Creates 'nama' column of type string
            $table->string('ip_pc__screen_queue_sudah_panggil'); // Creates 'nama' column of type string
            $table->datetime('tgl_jam_panggil'); // Creates 'nama' column of type string
            $table->String('kode_booking'); // Creates 'nama' column of type string
            $table->string('panggil_pasien_diruangan'); // Creates 'nama' column of type string
            

    
    
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
