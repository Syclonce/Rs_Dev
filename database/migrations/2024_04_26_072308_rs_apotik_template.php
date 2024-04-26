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
      Schema::create('rs_apotik_template', function (Blueprint $table) {
        $table->id();
        $table->string('nama_template'); // Creates 'nama' column of type string
        $table->string('isaktif'); // Creates 'nama' column of type string
        $table->string('user_id'); // Creates 'nama' column of type string
        $table->date('tgl'); // Creates 'nama' column of type string
       

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
