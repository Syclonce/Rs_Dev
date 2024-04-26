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
        Schema::create('tdok_bio', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Creates 'nama' column of type string
            $table->string('alamat'); // Creates 'nama' column of type string
            $table->string('no_npwp'); // Creates 'nama' column of type string
            $table->string('nama_racik'); // Creates 'nama' column of type string



            $table->timestamps(); // Creates 'created_at' and 'updated_at' columns for timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       //
       Schema::dropIfExists('tdok_bio');
    }
};
