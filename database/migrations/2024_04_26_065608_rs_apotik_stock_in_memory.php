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
      Schema::create('rs_apotik_resep_in_memory', function (Blueprint $table) {
        $table->id();
        $table->string('site_apotik'); // Creates 'nama' column of type string
        $table->integer('stock_terdeteksi'); // Creates 'nama' column of type string
        $table->datetime('last_terdeteksi'); // Creates 'nama' column of type string
        
       

        $table->timestamps(); // Creates 'created_at' and 'updated_at' columns for timestamps
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
