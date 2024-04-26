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
      Schema::create('rs_apotik_penyesuaian_masuk', function (Blueprint $table) {
        $table->id();
        $table->integer('idx'); // Creates 'nama' column of type string
        $table->date('tgl'); // Creates 'nama' column of type string
        $table->time('jam'); // Creates 'nama' column of type string
        $table->string('id_user'); // Creates 'nama' column of type string
        $table->string('id_brg'); // Creates 'nama' column of type string
        $table->integer('total'); // Creates 'nama' column of type string
        $table->integer('harga'); // Creates 'nama' column of type string
        $table->string('alasan'); // Creates 'nama' column of type string
        $table->string('batch_mutasi'); // Creates 'nama' column of type string
        $table->string('site_apotik'); // Creates 'nama' column of type string
        $table->integer('ref_jumlah_sebelum_penyesuaian'); // Creates 'nama' column of type string
       

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
