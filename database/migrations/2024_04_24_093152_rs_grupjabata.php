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
        Schema::create('rs_grupjabatan', function (Blueprint $table) {
            $table->id(); // Creates auto-incrementing primary key 'id'
            $table->string('kode_jabatan');
            $table->string('nama_grup_jabatan');
            $table->timestamps(); // Creates 'created_at' and 'updated_at' columns for timestamps
            // // Add foreign key constraint for 'kode_jabatan' field
            $table->foreign('kode_jabatan')->references('kode_jabatan')->on('rs_jabatan')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rs_grupjabatan');
    }
};
