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
      Schema::create('rs_apotik_stock_opname', function (Blueprint $table) {
        $table->id();
        $table->string('nama_barang'); // Creates 'nama' column of type string
        $table->date('tanggal'); // Creates 'nama' column of type string
        $table->integer('jumlah'); // Creates 'nama' column of type string
        $table->integer('harga'); // Creates 'nama' column of type string
        $table->string('site_apotik'); // Creates 'nama' column of type string
        $table->time('jam'); // Creates 'nama' column of type string
        $table->string('user_id'); // Creates 'nama' column of type string
        $table->date('expired'); // Creates 'nama' column of type string
        $table->string('methode'); // Creates 'nama' column of type string
        
       

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
