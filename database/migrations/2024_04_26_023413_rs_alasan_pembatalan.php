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
        Schema::create('rs_alasan_pembatalan', function (Blueprint $table) {
          $table->id();
          $table->string('id_pembatalan'); // Creates 'nama' column of type string
          $table->string('modul'); // Creates 'nama' column of type string
          $table->text('text_alasan'); // Creates 'nama' column of type string
          $table->string('key_name'); // Creates 'nama' column of type string
          $table->date('tanggal'); // Creates 'nama' column of type string
          $table->time('jam'); // Creates 'nama' column of type string
          $table->string('user_id'); // Creates 'nama' column of type string
          $table->string('cib_related'); // Creates 'nama' column of type string
          $table->string('poli_related'); // Creates 'nama' column of type string
          $table->string('dokter_related'); // Creates 'nama' column of type string
          $table->string('remark'); // Creates 'nama' column of type string
          $table->text('sql_for_reexecte'); // Creates 'nama' column of type string
  
  
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
