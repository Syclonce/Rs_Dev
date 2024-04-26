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
      Schema::create('rs_apotik_terima_supplier', function (Blueprint $table) {
        $table->id();
        $table->string('no_bukti'); // Creates 'nama' column of type string
        $table->string('supplier'); // Creates 'nama' column of type string
        $table->string('no_faktur_supplier'); // Creates 'nama' column of type string
        $table->string('site_apotik'); // Creates 'nama' column of type string
        $table->integer('ppn'); // Creates 'nama' column of type string
        $table->date('jatuh_tempo'); // Creates 'nama' column of type string
        $table->string('keterangan'); // Creates 'nama' column of type string
        $table->string('do'); // Creates 'nama' column of type string
        $table->string('petugas'); // Creates 'nama' column of type string
        $table->string('materai'); // Creates 'nama' column of type string
        $table->integer('koreksi_total'); // Creates 'nama' column of type string
                   

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
