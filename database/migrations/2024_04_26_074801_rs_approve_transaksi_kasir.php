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
      Schema::create('rs_approve_transaksi_kasir', function (Blueprint $table) {
        $table->id();
        $table->integer('no_slip'); // Creates 'nama' column of type string
        $table->date('tanggal'); // Creates 'nama' column of type string
        $table->time('jam'); // Creates 'nama' column of type string
        $table->string('user_id'); // Creates 'nama' column of type string
        $table->string('issudahdipostingjurnal'); // Creates 'nama' column of type string
        $table->datetime('tgl_jam_posting'); // Creates 'nama' column of type string
        $table->string('user_id_posting'); // Creates 'nama' column of type string
        $table->string('jenis_transaksi'); // Creates 'nama' column of type string
                         

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
