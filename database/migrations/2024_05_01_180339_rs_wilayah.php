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
        Schema::create('rs_wilayah', function (Blueprint $table) {
            $table->string('kode')->primary();
            $table->string('kode_kabupaten');
            $table->string('name');
            $table->timestamps();
            $table->foreign('kode_kabupaten')->references('kode')->on('rs_kabupaten')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rs_wilayah');
    }
};
