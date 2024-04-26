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
      Schema::create('rs_appointment_kasus_tunda', function (Blueprint $table) {
        $table->id();
        $table->string('no_letter'); // Creates 'nama' column of type string
        $table->string('id_pasien'); // Creates 'nama' column of type string
        $table->string('poli'); // Creates 'nama' column of type string
        $table->string('dokter'); // Creates 'nama' column of type string
        $table->date('tanggal'); // Creates 'nama' column of type string
        $table->time('jam'); // Creates 'nama' column of type string
        $table->string('status'); // Creates 'nama' column of type string
                         

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
