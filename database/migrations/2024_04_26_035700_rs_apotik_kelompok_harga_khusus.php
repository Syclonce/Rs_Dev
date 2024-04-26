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
      Schema::create('rs_apotik_kelompok_harga_khusus', function (Blueprint $table) {
        $table->id();
        $table->string('nama_kelompok'); // Creates 'nama' column of type string
        $table->string('id_barang'); // Creates 'nama' column of type string
        $table->integer('harga'); // Creates 'nama' column of type string
        $table->string('las_update'); // Creates 'nama' column of type string
        $table->string('user_id'); // Creates 'nama' column of type string
        

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
