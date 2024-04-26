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
      Schema::create('rs_apotik_tblharga', function (Blueprint $table) {
        $table->id();
        $table->integer('harga'); // Creates 'nama' column of type string
        $table->integer('harga2'); // Creates 'nama' column of type string
        $table->integer('harga3'); // Creates 'nama' column of type string
        $table->integer('harga4'); // Creates 'nama' column of type string
        $table->integer('harga5'); // Creates 'nama' column of type string
        $table->date('tgl_edit'); // Creates 'nama' column of type string
        $table->string('nama_user'); // Creates 'nama' column of type string
        
       

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
