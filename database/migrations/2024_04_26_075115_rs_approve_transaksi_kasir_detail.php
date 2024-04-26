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
      Schema::create('rs_approve_transaksi_kasir_detail', function (Blueprint $table) {
        $table->id();
        $table->integer('no_slip'); // Creates 'nama' column of type string
        $table->string('no_faktur_klinik'); // Creates 'nama' column of type string
        $table->string('no_faktur_apotik'); // Creates 'nama' column of type string
        

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
