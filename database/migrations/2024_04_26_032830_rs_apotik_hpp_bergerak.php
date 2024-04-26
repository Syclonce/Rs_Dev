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
      Schema::create('rs_apotik_hpp_bergerak', function (Blueprint $table) {
        $table->id();
        $table->string('id_barang'); // Creates 'nama' column of type string
        $table->date('tanggal'); // Creates 'nama' column of type string
        $table->time('jam'); // Creates 'nama' column of type string
        $table->string('posisi'); // Creates 'nama' column of type string
        $table->string('site_apotik'); // Creates 'nama' column of type string
        $table->integer('qty_before'); // Creates 'nama' column of type string
        $table->integer('hpp_before'); // Creates 'nama' column of type string
        $table->integer('qty'); // Creates 'nama' column of type string
        $table->integer('harga'); // Creates 'nama' column of type string
        $table->integer('qty_after'); // Creates 'nama' column of type string
        $table->integer('hpp_after'); // Creates 'nama' column of type string
        $table->integer('no_referensi'); // Creates 'nama' column of type string
        $table->string('remark'); // Creates 'nama' column of type string
        $table->string('group_posisi'); // Creates 'nama' column of type string
        $table->string('log_editing_if_edited'); // Creates 'nama' column of type string
        $table->string('referensi'); // Creates 'nama' column of type string
            

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
