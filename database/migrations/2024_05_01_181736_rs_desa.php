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
        Schema::create('rs_desa', function (Blueprint $table) {
            $table->string('kode')->primary();
            $table->string('kode_wilayah');
            $table->string('name');
            $table->timestamps();
            $table->foreign('kode_wilayah')->references('kode')->on('rs_wilayah')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rs_desa');
    }
};
