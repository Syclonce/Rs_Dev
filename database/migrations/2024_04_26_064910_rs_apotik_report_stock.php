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
      Schema::create('rs_apotik_report_stock', function (Blueprint $table) {
        $table->id();
        $table->integer('id_brg'); // Creates 'nama' column of type string
        $table->string('nama'); // Creates 'nama' column of type string
        $table->string('sebelum'); // Creates 'nama' column of type string
        $table->integer('masuk'); // Creates 'nama' column of type string
        $table->integer('keluar'); // Creates 'nama' column of type string
        $table->integer('sisa'); // Creates 'nama' column of type string
        $table->string('satuan'); // Creates 'nama' column of type string
              

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
