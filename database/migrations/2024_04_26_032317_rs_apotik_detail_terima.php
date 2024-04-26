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
      Schema::create('rs_apotik_detail_terima', function (Blueprint $table) {
        $table->id();
        $table->string('no_faktur'); // Creates 'nama' column of type string
        $table->integer('jumlah'); // Creates 'nama' column of type string
        $table->integer('hpp_rata_rata_update_data_log'); // Creates 'nama' column of type string
        $table->integer('hpp_rata_rata_setelah_terima'); // Creates 'nama' column of type string
        $table->integer('inc'); // Creates 'nama' column of type string
        $table->integer('harga_beli'); // Creates 'nama' column of type string
        $table->date('expired'); // Creates 'nama' column of type string
        $table->integer('disc'); // Creates 'nama' column of type string
        $table->string('batch'); // Creates 'nama' column of type string
            

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
