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
        Schema::create('rs_pasiens', function (Blueprint $table) {
            $table->string('norm')->unique();
            $table->date('tgldaf');
            $table->string('nama');
            $table->string('sex');
            $table->date('tgllhr');
            $table->boolean('menikah');
            $table->string('agama');
            $table->string('ibukng');
            $table->string('goldar');
            $table->string('pkj');
            $table->string('pddk');
            $table->string('pjmn');
            $table->string('nokt');
            $table->string('kga');
            $table->string('nmakga');
            $table->string('noktp');
            $table->string('Alamat');
            $table->string('pvi');
            $table->string('kta');
            $table->string('kec');
            $table->string('des');
            $table->string('tpl');
            $table->string('email');
            $table->string('nowp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rs_pasiens');
    }
};
