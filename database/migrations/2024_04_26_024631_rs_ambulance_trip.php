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
         Schema::create('rs_ambulance_trip', function (Blueprint $table) {
            $table->id();
            $table->string('id_trip'); // Creates 'nama' column of type string
            $table->datetime('tanggal_jam_dibuat'); // Creates 'nama' column of type string
            $table->string('user_id'); // Creates 'nama' column of type string
            $table->string('no_rm_bila_pasien'); // Creates 'nama' column of type string
            $table->string('keperluan_bila_lainnya'); // Creates 'nama' column of type string
            $table->string('alamat_tujuan'); // Creates 'nama' column of type string
            $table->string('kota'); // Creates 'nama' column of type string
            $table->string('kecamatan'); // Creates 'nama' column of type string
            $table->string('penumpang_1'); // Creates 'nama' column of type string
            $table->string('penumpang_2'); // Creates 'nama' column of type string
            $table->string('penumpang_3'); // Creates 'nama' column of type string
            $table->string('driver'); // Creates 'nama' column of type string
            $table->datetime('tgl_jam_berangkat'); // Creates 'nama' column of type string
            $table->datetime('tgl_jam_kembali'); // Creates 'nama' column of type string
            $table->text('catatan_kembali'); // Creates 'nama' column of type string
            $table->string('jarak'); // Creates 'nama' column of type string

    
    
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
