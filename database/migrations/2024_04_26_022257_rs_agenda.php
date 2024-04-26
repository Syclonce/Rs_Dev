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
      Schema::create('rs_agenda', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal'); // Creates 'nama' column of type string
        $table->time('jam'); // Creates 'nama' column of type string
        $table->string('acara'); // Creates 'nama' column of type string
        $table->string('tempat'); // Creates 'nama' column of type string
        $table->string('keterangan'); // Creates 'nama' column of type string
        $table->string('wilayah_kerja'); // Creates 'nama' column of type string


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
