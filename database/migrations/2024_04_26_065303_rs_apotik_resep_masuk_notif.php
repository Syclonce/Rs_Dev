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
      Schema::create('rs_apotik_resep_masuk_notif', function (Blueprint $table) {
        $table->id();
        $table->integer('no_upf'); // Creates 'nama' column of type string
        $table->string('ip_pc'); // Creates 'nama' column of type string
        $table->date('tgl_notif'); // Creates 'nama' column of type string
        
       

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
