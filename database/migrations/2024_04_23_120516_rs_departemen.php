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
        Schema::create('rs_departemen', function (Blueprint $table) {
            $table->id(); // Creates auto-incrementing primary key 'id'
            $table->string('nama'); // Creates 'nama' column of type string
            $table->timestamps(); // Creates 'created_at' and 'updated_at' columns for timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('rs_departemen');
    }
};
