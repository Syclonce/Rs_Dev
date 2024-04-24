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
        Schema::create('rs_emergency', function (Blueprint $table) {
            $table->id();
            $table->string('kode_emergency'); // Creates 'nama' column of type string
            $table->string('nama_emergency'); // Creates 'nama' column of type string
            $table->integer('indexs'); // Creates 'nama' column of type string
            $table->timestamps(); // Creates 'created_at' and 'updated_at' columns for timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rs_emergency');
    }
};
